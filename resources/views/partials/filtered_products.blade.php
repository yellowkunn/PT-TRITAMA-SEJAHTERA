@foreach ($products as $item)
    <div
        class="relative border border-gray-300 p-6 flex flex-col items-center rounded-md shadow hover:shadow-md transition">
        <input type="checkbox" class="checkbox-produk w-6 h-6 custom-checkbox hidden absolute top-2 right-2"
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
