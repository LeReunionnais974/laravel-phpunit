<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-wrap justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Products') }}
            </h2>
            <a href="{{ route('products.create') }}">
                <x-primary-button class="bg-blue-400 shadow uppercase text-xs px-3 py-2">
                    {{ __('Add product') }}
                </x-primary-button>
            </a>
        </div>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm rounded-lg">
                @forelse ($products as $product)
                <div class="flex items-center justify-between px-3 py-2 shadow">
                    <div>
                        <p class="text-xs sm:text-sm text-gray-900 dark:text-gray-100">{{ $product->name }}</p>
                        <p class="text-xs sm:text-sm text-gray-900 dark:text-gray-100">{{ $product->price }}</p>
                    </div>
                    <a class="text-xs hover:underline text-gray-900 dark:text-gray-100" href="{{ route('products.show', ['product' => $product->id]) }}">
                        {{ __('Show more...') }}
                    </a>
                </div>
                @empty
                <div class="px-3 py-2 shadow">
                    <p class="text-xs sm:text-sm text-gray-900 dark:text-gray-100">{{ __('No products found') }}</p>
                </div>
                @endforelse
            </div>

            <div class="py-4">
                {{ $products->links('pagination::tailwind') }}
            </div>

        </div>
    </div>
</x-app-layout>