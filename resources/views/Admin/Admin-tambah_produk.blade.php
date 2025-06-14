@extends('Admin.MainAdmin')
@section('container')
    <div class="container">
        <h3>Tambah Data Produk</h3>

        @if (session()->has('success'))
            <div id="success-alert" class="alert alert-success">
                {{ session('success') }}
            </div>
            <script>
                setTimeout(() => document.getElementById('success-alert')?.remove(), 3000);
            </script>
        @endif

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul style="margin: 0; padding-left: 20px;">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="/tambahproduk" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="category_id">Kategori:</label>
                <select name="category_id" id="category_id" required>
                    <option value="">Pilih</option>
                    @forelse ($categories as $kategori)
                        <option value="{{ $kategori->id }}">{{ $kategori->name }}</option>
                    @empty
                        <option value="">Tidak ada kategori tersedia</option>
                    @endforelse
                </select>
            </div>

            <div class="form-group">
                <label for="name">Product:</label>
                <input type="text" name="name" id="name" placeholder="Nama Barang" required>
                @error('name')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="quantity">Quantity:</label>
                <input type="number" name="quantity" id="quantity" placeholder="Jumlah" required>
                @error('quantity')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="from">From:</label>
                <input type="text" name="from" id="from" placeholder="Dari mana" required>
                @error('from')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="condition">Condition:</label>
                <input type="text" name="condition" id="condition" placeholder="Kondisi barang" required>
                @error('condition')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="shipping_information">Shipping Information:</label>
                <textarea name="shipping_information" id="shipping_information" placeholder="Informasi pengiriman" rows="4"></textarea>
                @error('shipping_information')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <input type="file" id="gambar" name="gambar[]" multiple accept="image/*" style="display: none;">
            <button type="button" id="addGambarBtn" class="btn">Tambah Gambar</button>

            <!-- Teks info batas minimum -->
            <small id="minGambarInfo" style="display: block; margin-top: 6px; color: #6c757d; font-size: 0.875rem;">
                * Minimal unggah 2 gambar produk
            </small>

            <!-- Preview gambar akan muncul di sini -->
            <div id="preview" style="margin-top: 12px;"></div>

            @error('gambar.*')
                <small class="text-danger">{{ $message }}</small>
            @enderror

            <button type="submit" class="btn" style="margin-top: 25px;">Submit</button>
        </form>
    </div>

    <script>
        const gambarInput = document.getElementById('gambar');
        const addBtn = document.getElementById('addGambarBtn');
        const previewContainer = document.getElementById('preview');

        addBtn.addEventListener('click', () => {
            gambarInput.click();
        });

        gambarInput.addEventListener('change', (e) => {
            const newFiles = Array.from(e.target.files);

            newFiles.forEach(file => {
                const reader = new FileReader();
                reader.onload = function(e) {
                    const previewBox = document.createElement('div');
                    previewBox.classList.add('preview-box');

                    const image = document.createElement('img');
                    image.src = e.target.result;

                    const hiddenInput = document.createElement('input');
                    hiddenInput.type = 'file';
                    hiddenInput.name = 'gambar[]';
                    hiddenInput.files = createFileList(file);
                    hiddenInput.style.display = 'none';

                    const removeBtn = document.createElement('button');
                    removeBtn.classList.add('remove-btn');
                    removeBtn.innerHTML = '&times;';
                    removeBtn.onclick = () => previewBox.remove();

                    previewBox.appendChild(image);
                    previewBox.appendChild(removeBtn);
                    previewBox.appendChild(hiddenInput);
                    previewContainer.appendChild(previewBox);
                };
                reader.readAsDataURL(file);
            });

            gambarInput.value = '';
        });

        function createFileList(file) {
            const dataTransfer = new DataTransfer();
            dataTransfer.items.add(file);
            return dataTransfer.files;
        }
    </script>
@endsection
