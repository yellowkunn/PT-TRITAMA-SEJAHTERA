@extends('Admin.MainAdmin')
@section('container')
    <div class="container" style="min-height: 100vh;">
        <h3 class="p-5">Tambah Kategori Produk</h3>
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

            <form action="/tambahkategori" method="POST" enctype="multipart/form-data">
                @csrf

                <label for="name" style="text-align: left; display: block; margin-bottom: 5px;">Product:</label>
                <input type="text" name="name" id="name" class="input-control" placeholder=""
                    required>
                <label for="description" style="text-align: left; display: block; margin-bottom: 5px;">Description:</label>
                <textarea name="description" placeholder="" class="input-control" cols="30" rows="10"></textarea>

                <label for="gambar" style="text-align: left; display: block; margin-bottom: 5px;">Image:</label>
                <input type="file" name="gambar" id="gambar" class="input-control" required>

                <input type="submit" name="submit" value="Submit" class="btn">
            </form>
        </div>
    </div>
@endsection
