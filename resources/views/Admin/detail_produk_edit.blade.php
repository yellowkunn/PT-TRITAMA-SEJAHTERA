<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>
        {{ $productbyid->name }} Info
    </title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
    <style>
        /* Custom scrollbar removal for table cells to keep exact spacing */
        table {
            border-collapse: collapse;
        }
    </style>
</head>

<body class="bg-[#f7faff] text-[#1a202c] font-sans">

    {{-- @include('components.navbar') --}}

    <main class="max-w-5xl mx-auto p-6 sm:p-10 border border-[#1a202c] border-opacity-30 rounded-md shadow-md">

        @if (session()->has('success'))
            <div id="success-alert" class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
            </div>
        @endif

        @if (session()->has('warning'))
            <div id="warning-alert" class="alert alert-warning alert-dismissible fade show" role="alert">
                {{ session('warning') }}
            </div>
        @endif

        <script>
            function fadeOutAndRemove(alertId) {
                const alert = document.getElementById(alertId);
                if (alert) {
                    alert.classList.remove('show');
                    alert.classList.add('fade');

                    setTimeout(() => alert.remove(), 500);
                }
            }

            setTimeout(() => fadeOutAndRemove('success-alert'), 3000);
            setTimeout(() => fadeOutAndRemove('warning-alert'), 3000);
        </script>


        <section>
            <article class="mt-6 text-sm text-[#1a202c]">
                <h1 class="font-semibold text-base mt-4">
                    {{ $productbyid->name }}
                </h1>
            </article>
        </section>
        <form action="{{ route('product.update', ['id_product' => $productbyid->id_product]) }}" method="POST"
            enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <input type="hidden" name="id_product" value="{{ $productbyid->id_product }}">

            <section class="mt-10 grid grid-cols-1 sm:grid-cols-2 gap-6">
                @foreach ($productbyid->images as $image)
                    <div class="space-y-2">
                        {{-- Preview Gambar --}}
                        <img src="{{ asset('gambar_produk/' . $image->image_path) }}"
                            class="rounded-md shadow-md w-full object-cover border border-[#1a202c] border-opacity-30"
                            height="300" width="450" />

                        {{-- Hidden ID untuk referensi gambar lama --}}
                        <input type="hidden" name="old_image_ids[]" value="{{ $image->id_image }}">

                        {{-- Input untuk ganti gambar ini --}}
                        <label class="block text-sm font-medium text-[#1a202c]">Ganti Gambar Ini:</label>
                        <input type="file" name="new_image_replacements[{{ $image->id_image }}]" accept="image/*"
                            class="w-full border border-[#1a202c] border-opacity-30 rounded-md p-2 text-sm">
                    </div>
                @endforeach
            </section>

            <section class="mt-10 space-y-6">

                {{-- Name --}}
                <div>
                    <label for="name" class="text-sm font-semibold">Name:</label>
                    <input type="text" id="name" name="name" value="{{ $productbyid->name }}"
                        class="input-control w-full border border-[#1a202c] border-opacity-30 rounded-md p-2 text-sm"
                        required>
                </div>

                {{-- FROM --}}
                <div>
                    <label for="from" class="text-sm font-semibold">From:</label>
                    <input type="text" id="from" name="from" value="{{ $productbyid->from }}"
                        class="input-control w-full border border-[#1a202c] border-opacity-30 rounded-md p-2 text-sm"
                        required>
                </div>

                {{-- CONDITION --}}
                <div>
                    <label for="condition" class="text-sm font-semibold">Condition:</label>
                    <input type="text" id="condition" name="condition" value="{{ $productbyid->condition }}"
                        class="input-control w-full border border-[#1a202c] border-opacity-30 rounded-md p-2 text-sm"
                        required>
                </div>

                {{-- QUANTITY --}}
                <div>
                    <label for="quantity" class="text-sm font-semibold">Quantity:</label>
                    <input type="number" id="quantity" name="quantity" value="{{ $productbyid->quantity }}"
                        class="input-control w-full border border-[#1a202c] border-opacity-30 rounded-md p-2 text-sm"
                        required>
                </div>

                {{-- SHIPPING INFORMATION --}}
                <div>
                    <label for="shipping_information" class="text-sm font-semibold">Shipping Information:</label>
                    <textarea id="shipping_information" name="shipping_information" rows="4"
                        class="input-control w-full border border-[#1a202c] border-opacity-30 rounded-md p-2 text-sm">{{ $productbyid->shipping_information }}</textarea>
                </div>

                {{-- KATEGORI --}}
                <div>
                    <label for="category_id" class="text-sm font-semibold">Kategori:</label>
                    <select name="category_id" id="category_id"
                        class="input-control w-full border border-[#1a202c] border-opacity-30 rounded-md p-2 text-sm"
                        required>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}"
                                {{ $productbyid->category_id == $category->id ? 'selected' : '' }}>
                                {{ $category->name }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="pt-4">
                    <button type="submit"
                        class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-md shadow">
                        Simpan Perubahan
                    </button>
                </div>

            </section>
        </form>


        <nav
            class="mt-10 flex flex-col sm:flex-row justify-between text-[10px] text-[#1a202c] text-opacity-50 font-sans">
            <a href="{{ url()->previous() != url()->current() ? url()->previous() : route('home') }}">
                &lt; BACK
                <br />
            </a>
        </nav>
    </main>

    @include('components.footer')
</body>

</html>
