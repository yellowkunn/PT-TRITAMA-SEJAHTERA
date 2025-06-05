<?php

namespace App\Http\Controllers;

use App\Models\Product;

use Illuminate\Http\Request;



class AdminController extends Controller
{
    public function dashboardadmin()
    {
        return view('Admin.Admin-dashboard');
    }
    //     public function datapengguna(){
    //         $pelanggan = User::where('peran', '=', 'pelanggan')
    //         ->paginate(5);
    //         return view ('admin.data-pengguna', compact('pelanggan'));
    //     }


    public function tambahbarang()
    {
        return view('Admin.Admin-tambah_produk');
    }

    public function tambah_product(Request $request)
    {
        // Validasi input
        $validate = $request->validate([
            'name' => 'required|string|max:255',
            'quantity' => 'required|integer|min:0',
            'description' => 'nullable|string',
            'shipping_information' => 'nullable|string',
            'category_id' => 'required|integer|exists:categories,id',
            'gambar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Menyimpan file gambar
        $file = $request->file('gambar');
        $extension = $file->getClientOriginalExtension();
        $nama_file = 'file_' . date('YmdHis') . '.' . $extension;
        $file->move(public_path('gambar_produk'), $nama_file);
        $berkas = '' . $nama_file;

        Product::create([
            'name' => $validate['name'],
            'quantity' => $validate['quantity'],
            'description' => $validate['description'],
            'shipping_information' => $validate['shipping_information'],
            'image' => $berkas,
            'category_id' => $validate['category_id'],
        ]);


        return redirect()->back()->with('success', 'Produk berhasil ditambahkan!');
    }
}
