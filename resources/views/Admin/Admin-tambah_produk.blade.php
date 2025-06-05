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
            {{-- <div class="form-group">
                <label for="kategori">Kategori:</label>
                @if (isset($kategori) && count($kategori) > 0)
                <select name="kategori" id="kategori" class="input-control" onChange="getSubCat(this.value);" required>
                    <option value="">--Pilih--</option>
                    @foreach ($kategori as $k)
                    <option value="{{ $k->ID_Kategori }}">{{ $k->Nama_Kategori }}</option>
                    @endforeach
                </select>
                @else
                <p>Tidak ada kategori yang tersedia.</p>
                @endif
            </div> --}}

            <div class="form-group">
                <label for="kategori">Kategori:</label>
                @if (isset($kategori) && count($kategori) > 0)
                <select name="kategori" id="kategori" class="input-control" onChange="getSubCat(this.value);" required>
                    <option value="Nama Barang">--Pilih--</option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>

                </select>
                @else
                <p>Tidak ada kategori yang tersedia.</p>
                @endif
            </div>

            <label for="nama" style="text-align: left; display: block; margin-bottom: 5px;">Product:</label>
            <input type="text" name="nama" id="nama" class="input-control" placeholder="Nama Barang" required>

            {{-- <label for="harga" style="text-align: left; display: block; margin-bottom: 5px;">Harga:</label>
            <input type="number" name="harga" id="harga" class="input-control" placeholder="Harga" required> --}}

            <label for="stok" style="text-align: left; display: block; margin-bottom: 5px;">Stock:</label>
            <input type="number" name="stok" id="stok" class="input-control" placeholder="Stok" required>

            <label for="deskripsi" style="text-align: left; display: block; margin-bottom: 5px;">Description</label>
            <textarea name="deskripsi" placeholder="deskripsi" class="input-control" cols="30" rows="10"></textarea>

            <label for="deskripsi_pengiriman" style="text-align: left; display: block; margin-bottom: 5px;">Shipping
                Information</label>
            <textarea name="deskripsi_pengiriman" placeholder="deskripsi" class="input-control" cols="30"
                rows="10"></textarea>

            <label for="gambar" style="text-align: left; display: block; margin-bottom: 5px;">Image:</label>
            <input type="file" name="gambar" id="gambar" class="input-control" required>

            <input type="submit" name="submit" value="Submit" class="btn">
        </form>
    </div>
</div>


@endsection