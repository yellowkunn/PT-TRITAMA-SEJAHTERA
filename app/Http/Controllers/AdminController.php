<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use App\Models\ProductImage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;



class AdminController extends Controller
{
    public function dashboardadmin()
    {
        return view('Admin.Admin-dashboard');
    }

    public function tambahbarang()
    {
        $categories = Category::all();
        return view('Admin.Admin-tambah_produk', compact('categories'));
    }

    public function kirim_produk(Request $request)
    {

        // Validasi input utama
        $validate = $request->validate([
            'name' => 'required|string|max:255',
            'quantity' => 'required|integer|min:0',
            'from' => 'required|string|max:255',
            'condition' => 'required|string|max:255',
            'shipping_information' => 'nullable|string',
            'category_id' => 'required|integer|exists:categories,id',
            'gambar' => 'required|array|min:2',
            'gambar.*' => 'required|image|mimes:jpeg,png,jpg,gif|max:5120',
        ], [
            'name.required' => 'Nama produk harus diisi.',
            'quantity.required' => 'Jumlah produk harus diisi.',
            'from.required' => 'Asal produk harus diisi.',
            'condition.required' => 'Kondisi produk harus diisi.',
            'shipping_information.required' => 'Informasi pengiriman produk harus diisi.',
            'gambar.*.required' => 'Setiap gambar wajib diunggah.',
            'gambar.*.image' => 'File yang diunggah harus berupa gambar.',
            'gambar.*.max' => 'Ukuran gambar tidak boleh lebih dari 5MB.',
        ]);

        // Buat data produk dulu
        $product = Product::create([
            'name' => $validate['name'],
            'quantity' => $validate['quantity'],
            'from' => $validate['from'],
            'condition' => $validate['condition'],
            'shipping_information' => $validate['shipping_information'] ?? null,
            'category_id' => $validate['category_id'],
        ]);


        foreach ($request->file('gambar') as $file) {
            $extension = $file->getClientOriginalExtension();
            $nama_file = 'produk_' . time() . '_' . uniqid() . '.' . $extension;
            $file->move(public_path('gambar_produk'), $nama_file);

            ProductImage::create([
                'product_id' => $product->id_product,
                'image_path' => $nama_file,
            ]);
        }

        return redirect()->back()->with('success', 'Produk berhasil ditambahkan!');
    }


    public function tambahkategori()
    {
        return view('Admin.Admin-tambah_kategori');
    }

    public function kirim_kategori(Request $request)
    {
        // Validasi input
        $validate = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:5120',
        ]);

        // Menyimpan file gambar
        $file = $request->file('gambar');
        $extension = $file->getClientOriginalExtension();
        $nama_file = 'file_' . date('YmdHis') . '.' . $extension;
        $file->move(public_path('gambar_produk'), $nama_file);
        $berkas = '' . $nama_file;

        Category::create([
            'name' => $validate['name'],
            'description' => $validate['description'],
            'image' => $berkas,
        ]);

        return redirect()->back()->with('success', 'Kategori berhasil ditambahkan!');
    }

    public function editproducts()
    {
        $categories = Category::all();
        $products = Product::with('category')->get();
        return view('Admin.produk_edit', compact('products', 'categories'));
    }

    public function filterProducts($category_id = null)
    {
        if ($category_id === 'all') {
            $products = Product::with('images')->get();
        } else {
            $products = Product::with('images')->where('category_id', $category_id)->get();
        }

        return response()->json([
            'html' => view('partials.filtered_products', compact('products'))->render()
        ]);
    }

    public function deleteProducts(Request $request)
    {
        $ids = $request->input('ids');
        Product::whereIn('id_product', $ids)->delete();

        return response()->json(['message' => 'Produk berhasil dihapus.']);
    }

    public function showeditproduct($id)
    {
        $categories = Category::all();
        $productbyid = Product::with('images')->where('id_product', $id)->firstOrFail();
        return view('Admin.detail_produk_edit', compact('productbyid', 'categories'));
    }

    public function update(Request $request, $id_product)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'quantity' => 'required|integer',
            'from' => 'required|string|max:255',
            'condition' => 'required|string|max:255',
            'shipping_information' => 'nullable|string',
            'category_id' => 'required|exists:categories,id',
            'new_image_replacements.*' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:5120',
            'new_images.*' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:5120',
        ]);

        $product = Product::findOrFail($id_product);

        // Cek apakah data berubah
        $dataChanged =
            $product->name !== $request->name ||
            $product->quantity != $request->quantity ||
            $product->from !== $request->from ||
            $product->condition !== $request->condition ||
            $product->shipping_information !== $request->shipping_information ||
            $product->category_id !== $request->category_id;

        $hasNewImageReplacements = $request->has('new_image_replacements') && count(array_filter($request->new_image_replacements)) > 0;
        $hasNewImages = $request->hasFile('new_images');

        if (!$dataChanged && !$hasNewImageReplacements && !$hasNewImages) {
            return redirect()->back()->with('warning', 'Tidak ada perubahan yang dikirimkan.');
        }

        $product->update([
            'name' => $request->name,
            'quantity' => $request->quantity,
            'from' => $request->from,
            'condition' => $request->condition,
            'shipping_information' => $request->shipping_information,
            'category_id' => $request->category_id,
        ]);

        // ✅ Ganti gambar lama jika ada upload baru
        if ($request->has('new_image_replacements')) {
            foreach ($request->new_image_replacements as $imageId => $uploadedImage) {
                if ($uploadedImage) {
                    $image = ProductImage::find($imageId);

                    if ($image) {
                        $oldPath = public_path('gambar_produk/' . $image->image_path);
                        if (File::exists($oldPath)) {
                            File::delete($oldPath);
                        }

                        $newImageName = time() . '-' . uniqid() . '.' . $uploadedImage->getClientOriginalExtension();
                        $uploadedImage->move(public_path('gambar_produk'), $newImageName);

                        $image->update(['image_path' => $newImageName]);
                    }
                }
            }
        }

        // ✅ Tambah gambar baru jika ada
        if ($request->hasFile('new_images')) {
            foreach ($request->file('new_images') as $imageFile) {
                $imageName = time() . '-' . uniqid() . '.' . $imageFile->getClientOriginalExtension();
                $imageFile->move(public_path('gambar_produk'), $imageName);

                ProductImage::create([
                    'product_id' => $id_product,
                    'image_path' => $imageName,
                ]);
            }
        }

        return redirect()->back()->with('success', 'Produk berhasil diperbarui.');
    }
}
