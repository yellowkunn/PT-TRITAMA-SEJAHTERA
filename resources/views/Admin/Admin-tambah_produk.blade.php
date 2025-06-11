@extends('Admin.MainAdmin')
@section('container')
    <div class="container" style="min-height: 100vh;">
        <h3 class="p-5">Tambah Data Barang</h3>
        <div class="box">
            @if (session()->has('success'))
                <div id="success-alert" class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                </div>

                <script>
                    // Hilangkan alert setelah 3 detik
                    setTimeout(function() {
                        const alert = document.getElementById('success-alert');
                        if (alert) {
                            // Tambah class untuk animasi fade out
                            alert.classList.remove('show');
                            alert.classList.add('fade');

                            // Hapus elemen dari DOM setelah animasi
                            setTimeout(() => alert.remove(), 500); // tunggu animasi selesai
                        }
                    }, 3000); // 3000ms = 3 detik
                </script>
            @endif

            <form action="/tambahproduk" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="category_id">Kategori:</label>
                    <select name="category_id" id="category_id" class="input-control" onChange="getSubCat(this.value);"
                        required>
                        <option value="">Pilih</option>
                        @forelse ($categories as $kategori)
                            <option value="{{ $kategori->id }}">{{ $kategori->name }}</option>
                        @empty
                            <option value="">Tidak ada kategori tersedia</option>
                        @endforelse
                    </select>

                </div>

                <label for="name" style="text-align: left; display: block; margin-bottom: 5px;">Product:</label>
                <input type="text" name="name" id="name" class="input-control" placeholder="Nama Barang"
                    required>

                {{-- <label for="harga" style="text-align: left; display: block; margin-bottom: 5px;">Harga:</label>
            <input type="number" name="harga" id="harga" class="input-control" placeholder="Harga" required> --}}

                <label for="quantity" style="text-align: left; display: block; margin-bottom: 5px;">Quantity:</label>
                <input type="number" name="quantity" id="quantity" class="input-control" placeholder="quantity" required>

                <label for="description" style="text-align: left; display: block; margin-bottom: 5px;">Description</label>
                <textarea name="description" placeholder="description" class="input-control" cols="30" rows="10"></textarea>

                <label for="shipping_information" style="text-align: left; display: block; margin-bottom: 5px;">Shipping
                    Information</label>
                <textarea name="shipping_information" placeholder="shipping information" class="input-control" cols="30"
                    rows="10"></textarea>

                <label for="gambar" style="text-align: left; display: block; margin-bottom: 5px;">Image:</label>
                <input type="file" name="gambar" id="gambar" class="input-control" required>

                <input type="submit" name="submit" value="Submit" class="btn">
            </form>
        </div>
    </div>
@endsection
