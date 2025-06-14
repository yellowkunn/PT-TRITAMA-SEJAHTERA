@extends('Admin.MainAdmin')
@section('container')

<div class="section">
    <div class="container" style="min-height: 100vh;">
        <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
            <h3>Dashboard</h3>

            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button type="submit" class="btn btn-danger">Logout</button>
            </form>
        </div>

        <div class="box" style="opacity: 0.9;">
            <h4>Selamat Datang di Laman Admin</h4>
        </div>

        {{-- Tombol Navigasi --}}
        <div class="box" style="opacity: 0.9; padding: 20px;">
            <h5>Kelola Data</h5>
            <a href="{{ url('/admin/tambahkategori') }}" class="btn btn-primary" style="margin: 5px;">Tambah Kategori</a>
            <a href="{{ url('/admin/tambahproduk') }}" class="btn btn-success" style="margin: 5px;">Tambah Produk</a>
            <a href="{{ url('/admin/editproduk') }}" class="btn btn-warning" style="margin: 5px;">Edit Produk</a>
        </div>

        {{-- Gambar --}}
        <div class="box" style="opacity: 0.9;">
            <img src="https://i.pinimg.com/736x/fc/ec/61/fcec6176b3525d4d5c2d4b850f31c3a7.jpg" alt="Home Image" width="100%" style="margin-bottom: 50px; border-radius: 10%;">
        </div>
    </div>
</div>

@endsection
