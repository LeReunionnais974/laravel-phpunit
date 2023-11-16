<x-app-layout>

    <div class="w-full md:w-3/4 lg:w-1/2 mx-auto py-6 px-2 sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden p-4 shadow-sm rounded-lg">

            <div class="pb-3">
                <h4 class="font-semibold text-xl text-center text-gray-800 dark:text-gray-200 leading-tight">
                    {{ __('Add product') }}
                </h4>
            </div>

            <form method="POST" action="{{ route('products.store') }}">
                @csrf

                <div>
                    <x-input-label for="name" :value="__('Name')" />
                    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <div class="mt-4">
                    <x-input-label for="price" :value="__('Price')" />
                    <x-text-input id="price" class="block mt-1 w-full" type="text" name="price" :value="old('price')" required />
                    <x-input-error :messages="$errors->get('price')" class="mt-2" />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <x-primary-button class="ml-4">
                        {{ __('Save') }}
                    </x-primary-button>
                </div>
            </form>

        </div>
    </div>

</x-app-layout>