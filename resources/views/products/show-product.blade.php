<x-app-layout>
    <x-slot name="header">
        <div class="flex flex-wrap gap-2 justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ $product->name }}
            </h2>
            <div class="flex items-center gap-2">
                <a href="{{ route('products.edit', ['product' => $product->id]) }}">
                    <x-secondary-button>
                        {{ __('Edit product') }}
                    </x-secondary-button>
                </a>
                <form method="POST" action="{{ route('products.destroy', ['product' => $product->id]) }}">
                    @csrf
                    @method('DELETE')
                    <x-danger-button>
                        {{ __('Delete product') }}
                    </x-danger-button>
                </form>
            </div>
        </div>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm rounded-lg p-4">

                <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                    {{ __('General Information') }}
                </h2>
                <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                    {{ __('Name :') }} {{ $product->name  }}
                </p>
                <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                    {{ __('Price :') }} {{ $product->price  }}
                </p>
                <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                    {{ __('Created at :') }} {{ $product->created_at->format('d/m/Y')  }}
                </p>
                <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                    {{ __('Last update :') }} {{ $product->updated_at->format('d/m/Y')  }}
                </p>
            </div>

        </div>
    </div>
</x-app-layout>