@extends('Admin.MainAdmin')
@section('container')

<div class="section">
<div class="section">
    <div class="container" style="min-height: 100vh;">
        <h3>Data Barang</h3>
        <div class="box" style="opacity: 0.9;">
            <div style="display: flex; justify-content: space-between; align-items: center;">
                <p style="text-align: left;">
                    <a href="/tambahbarang">Tambah Data</a>
                </p>
                <form action="{{ route('barang.search') }}" method="GET" class="d-flex">
                    <input class="form-control me-2" type="search" name="search" placeholder="Cari Barang.."
                        aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
            @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
            @endif

            @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
            @endif

            <table border="1" cellspacing="0" class="table">
                <thead>
                    <tr>
                        <th width="60px">No</th>
                        <th>Kategori</th>
                        <th>Nama Barang</th>
                        <th>Harga</th>
                        <th>Stok</th>
                        <th>Gambar</th>
                        <th>Status</th>
                        <th>Deskripsi</th>
                        <th width="150px">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $currentPage = $databarang->currentPage();
                    $perPage = $databarang->perPage();
                    $totalItems = $databarang->total();
                    $startingNumber = ($currentPage - 1) * $perPage + 1;
                    @endphp
                    @foreach ($databarang as $dabar)
                    <tr>
                        <td>{{ $startingNumber++ }}</td>
                        <td>{{ $dabar->Nama_Kategori }}</td>
                        <td>{{ $dabar->Nama_Barang }}</td>
                        <td>{{ $dabar->Harga_Satuan }}</td>
                        <td>{{ $dabar->Stok_Jual }}</td>
                        <td><img src="{{ asset('berkas_ujis/' . $dabar->gambar) }}" alt="Gambar Stok" width="100"
                                height="100"></td>
                        <td>{{ $dabar->Status }}</td>
                        <td>{{ $dabar->deskripsi }}</td>
                        <td>
                            <a href="/editbarang/{{ $dabar->ID_Barang }}">Edit</a> ||
                            <form action="/databarang/{{ $dabar->ID_Barang }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="badge bg-danger border-0"
                                    onclick="return confirm('Are you sure?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $databarang->links() }}
        </div>
    </div>
</div>
</div>
@endsection