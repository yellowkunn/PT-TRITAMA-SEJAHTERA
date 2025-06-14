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
                    / Products
                </p>
                <h1 class="text-2xl font-bold leading-tight">
                    DISCOVER OUR BEST
                    <br />
                    {{ $categorybyid->name }}
                </h1>
            </div>
        </div>
    </div>
    <!-- Banner Image -->
    <div class="max-w-9xl mx-auto ">
        <img alt="Close-up image of steel structure beams and glass building facade in blue tone"
            class="w-full object-cover h-80"
            src="https://storage.googleapis.com/a1aa/image/0e7f1cde-d927-4014-dfa6-1a34eea7716b.jpg" width="1440" />
    </div>
    <!-- Products Grid -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 border-r border-l border-gray-200 py-10">
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6 max-w-5xl mx-auto">
            @foreach ($categorybyid->products as $item)
                <a href="{{ route('produkdetail.show', ['name' => $item->name]) }}">
                    <div class="border border-gray-300 p-6 flex flex-col items-center">
                        <img alt="Bundle of shiny steel pipes stacked and tied with metal straps" class="mb-4"
                            height="150" src="{{ asset('gambar_produk/' . $item->images[0]->image_path) }}"
                            width="200" />
                        <p class="text-xs text-center uppercase font-semibold">
                            {{ $item->name }}
                        </p>
                    </div>
                </a>
            @endforeach
        </div>
    </div>
</body>

</html>
