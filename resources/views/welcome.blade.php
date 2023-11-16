<x-guest-layout>
    @auth
    <a href="{{ route('dashboard') }}" class="text-xs sm:text-sm text-gray-900 dark:text-gray-100">
        Dashboard
    </a>
    @endauth

    @guest
    <h2 class="font-semibold text-xl text-center text-gray-800 dark:text-gray-200 leading-tight">
        {{ __('Welcome') }} ?
    </h2>

    <div class="flex gap-4 items-center justify-center py-4">
        <a href="{{ route('login') }}" class="text-xs sm:text-sm text-gray-900 dark:text-gray-100 hover:underline">Login</a>
        <a href="{{ route('register') }}" class="text-xs sm:text-sm text-gray-900 dark:text-gray-100 hover:underline">Register</a>
    </div>
    @endguest
</x-guest-layout>