@extends('Admin.MainAdmin')
@section('container')

<div class="container" style="min-height: 100vh;">
    <h3>Tambah Data Barang</h3>
    <div class="box">
        @if (session()->has('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
        </div>
        @endif
        <form action="/tambahproduk" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="category_id">Kategori:</label>
                <select name="category_id" id="category_id" class="input-control" onChange="getSubCat(this.value);" required>
                    <option value="">--Pilih--</option>
                    <option value="1">Vegetables</option>
                    <option value="2">Woods</option>
                    <option value="3">brickets</option>
                </select>
            </div>

            <label for="name" style="text-align: left; display: block; margin-bottom: 5px;">Product:</label>
            <input type="text" name="name" id="name" class="input-control" placeholder="Nama Barang" required>

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