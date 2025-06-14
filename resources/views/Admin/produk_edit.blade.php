<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>
        Webekspor Products
    </title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700&amp;display=swap" rel="stylesheet" />
    <style>
        body {
            font-family: "Inter", sans-serif;
        }

        .custom-checkbox {
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            width: 20px;
            height: 20px;
            border: 2px solid #ccc;
            border-radius: 50%;
            background-color: white;
            cursor: pointer;
            transition: all 0.2s ease-in-out;
        }

        .custom-checkbox:checked {
            background-color: #dc2626;
            /* Merah Tailwind */
            border-color: #dc2626;
            position: relative;
        }

        .custom-checkbox:checked::after {
            content: '✔';
            color: white;
            font-size: 12px;
            position: absolute;
            top: 1px;
            left: 4px;
        }
    </style>
</head>

<body class="bg-white text-black">
    <!-- Navigation -->
    @include('components.navbar')
    <!-- Breadcrumb and Title -->
    <div class="max-w-7xl mx-auto px-4 pt-20 sm:px-6 lg:px-8 border-r border-l border-gray-200">
        <div class="grid grid-cols-12 border-b border-gray-200">
            <div class="col-span-12 md:col-span-4 py-6">
                <p class="text-xs text-gray-600 mb-1">
                    / Edit Product
                </p>
                <h1 class="text-2xl font-bold leading-tight">
                    EDIT PRODUCT BY ADMIN
                    <br />
                </h1>
            </div>
        </div>
    </div>


    <!-- Products Grid -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 border-r border-l border-gray-200 py-5">


        <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown"
            class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none mb-5 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center inline-flex items-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
            type="button">Kategori <svg class="w-2.5 h-2.5 ms-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                fill="none" viewBox="0 0 10 6">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="m1 1 4 4 4-4" />
            </svg>
        </button>

        <!-- Dropdown menu -->
        <div id="dropdown"
            class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-sm w-44 dark:bg-gray-700">
            <ul class="py-2 text-sm text-gray-700 dark:text-gray-200">
                <li>
                    <a href="#"
                        class="dropdown-option block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                        data-id="all">Semua Kategori</a>
                </li>
                @foreach ($categories as $item)
                    <li>
                        <a href="#"
                            class="dropdown-option block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white"
                            data-id="{{ $item->id }}">{{ $item->name }}</a>
                    </li>
                @endforeach
            </ul>
        </div>

        <div class="flex gap-3 mb-5">
            <button id="selectModeBtn"
                class="text-white bg-gray-600 hover:bg-gray-700 focus:ring-4 focus:outline-none focus:ring-gray-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center">
                Pilih Produk
            </button>

            <button id="deleteSelectedBtn"
                class="hidden text-white bg-red-600 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-4 py-2.5 text-center inline-flex items-center">
                <i class="fas fa-trash-alt mr-2"></i> Hapus Produk Terpilih
            </button>
        </div>



        <div id="produk-container" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 max-w-5xl mx-auto">
            @foreach ($products as $item)
                <div class="relative border border-gray-300 p-6 flex flex-col items-center rounded-md shadow hover:shadow-md transition">
                    <input type="checkbox" class="checkbox-produk w-6 h-6 hidden peer absolute top-2 right-2 z-50"
                        value="{{ $item->id_product }}" />

                    <a href="{{ route('produkeditdetail.show', ['id' => $item->id_product]) }}"
                        class="block w-full h-full flex flex-col items-center">
                        <img alt="{{ $item->name }}" class="mb-4" height="150"  
                            src="{{ asset('gambar_produk/' . $item->images[0]->image_path) }}" width="200" />
                        <p class="text-xs text-center uppercase font-semibold">
                            {{ $item->name }}
                        </p>
                    </a>
                </div>
            @endforeach
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>

    <script>
        document.querySelectorAll('.dropdown-option').forEach(function(el) {
            el.addEventListener('click', function(e) {
                e.preventDefault();

                const categoryId = this.getAttribute('data-id');

                fetch(`/filter-products/${categoryId}`)
                    .then(response => response.json())
                    .then(data => {
                        document.getElementById('produk-container').innerHTML = data.html;
                    })
                    .catch(error => {
                        console.error('Gagal memuat produk:', error);
                    });
            });
        });


        const selectBtn = document.getElementById('selectModeBtn');
        const deleteBtn = document.getElementById('deleteSelectedBtn');

        let selectMode = false;

        selectBtn.addEventListener('click', function() {
            selectMode = !selectMode;
            document.querySelectorAll('.checkbox-produk').forEach(cb => {
                cb.classList.toggle('hidden', !selectMode);
                cb.checked = false;
            });

            deleteBtn.classList.toggle('hidden', true); // hide deleteBtn awalnya

            if (selectMode) {
                selectBtn.textContent = 'Batalkan Pilihan';
            } else {
                selectBtn.textContent = 'Pilih Produk';
            }
        });

        // Toggle delete button visibility
        document.addEventListener('change', function() {
            if (!selectMode) return;

            const checked = document.querySelectorAll('.checkbox-produk:checked');
            deleteBtn.classList.toggle('hidden', checked.length === 0);
        });

        deleteBtn.addEventListener('click', function() {
            const selectedIds = Array.from(document.querySelectorAll('.checkbox-produk:checked'))
                .map(cb => cb.value);

            if (selectedIds.length === 0) return;

            if (!confirm("Apakah Anda yakin ingin menghapus produk yang dipilih?")) return;

            fetch("/delete-products", {
                    method: "POST",
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    },
                    body: JSON.stringify({
                        ids: selectedIds
                    })
                })
                .then(response => response.json())
                .then(data => {
                    alert(data.message);
                    location.reload();
                })
                .catch(err => console.error('Gagal menghapus:', err));
        });
    </script>


</body>

</html>
