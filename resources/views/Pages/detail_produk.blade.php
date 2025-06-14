<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>
        {{ $productbyid->name }} Info
    </title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet" />
    <style>
        /* Custom scrollbar removal for table cells to keep exact spacing */
        table {
            border-collapse: collapse;
        }
    </style>
</head>

<body class="bg-[#f7faff] text-[#1a202c] font-sans">

    @include('components.navbar')

    <main class="max-w-5xl mx-auto p-6 sm:p-10 border border-[#1a202c] border-opacity-30 rounded-md shadow-md">
        <section>
            <article class="mt-6 text-sm text-[#1a202c]">
                <h1 class="font-semibold text-base mt-20">
                    {{ $productbyid->name }}
                </h1>
            </article>
        </section>
        <section class="mt-10 grid grid-cols-1 sm:grid-cols-2 gap-6">
            <img alt="Person holding three fresh cucumbers with green background, hands visible but face out of frame"
                class="rounded-md shadow-md w-full object-cover border border-[#1a202c] border-opacity-30"
                height="300" src="{{ asset('gambar_produk/' . $productbyid->images[0]->image_path) }}"
                width="450" />
            <img alt="Close-up image of multiple cucumbers stacked together showing their green textured skin"
                class="rounded-md shadow-md w-full object-cover border border-[#1a202c] border-opacity-30"
                height="300" src="{{ asset('gambar_produk/' . $productbyid->images[1]->image_path) }}"
                width="450" />
        </section>
        <section class="mt-10 space-y-8">
            <table class="w-full text-[12px] border border-[#1a202c] border-opacity-30">
                <thead>
                    <tr class="text-[11px] font-semibold text-[#1a202c] border border-[#1a202c] border-opacity-30">
                        <th class="border border-[#1a202c] border-opacity-30 px-3 py-1 text-left w-1/3">
                            From:
                        </th>
                        <td class="border border-[#1a202c] border-opacity-30 px-3 py-2 text-[11px]">
                            {{ $productbyid->from }}
                        </td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th class="border border-[#1a202c] border-opacity-30 px-3 py-1 text-left w-1/3">
                            Condition:
                        </th>
                        <td class="border border-[#1a202c] border-opacity-30 px-3 py-2 text-[11px]">
                            {{ $productbyid->condition }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <table class="w-full text-[12px] border border-[#1a202c] border-opacity-30">
                <thead>
                    <tr class=" text-[11px] font-semibold text-[#1a202c] border border-[#1a202c] border-opacity-30">
                        <th class="border border-[#1a202c] border-opacity-30 px-3 py-1 text-left w-1/3">
                            Quantity:
                        </th>
                        <td class="border border-[#1a202c] border-opacity-30 px-3 py-2 text-[11px]">
                            {{ $productbyid->quantity }}
                        </td>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th class="border border-[#1a202c] border-opacity-30 px-3 py-1 text-left w-1/3">
                            Shipping Information:
                        </th>
                        <td class="border border-[#1a202c] border-opacity-30 px-3 py-2 text-[11px]">
                            {{ $productbyid->shipping_information }}
                        </td>
                    </tr>
                </tbody>
            </table>
        </section>
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
