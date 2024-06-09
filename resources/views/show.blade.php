<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Show Product') }}
        </h2>
    </x-slot>
    

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                        <div class="mb-1">
                            <strong>Name:</strong>
                            {{ $product->name }}
                        </div>
                        <div class="mb-1">
                            <strong>Details:</strong>
                            {{ $product->detail }}
                        </div>
                        <div class="mb-1">
                            <strong>Jenis Produk:</strong>
                            {{ $product->productType }}
                        </div>
                        <div class="mb-1">
                            <strong>Foto Produk:</strong>
                            <img src="{{ asset($product->image) }}" style="width: 80%;height: auto" alt="Img">
                        </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>