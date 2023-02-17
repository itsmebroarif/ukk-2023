<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Home') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="jumbotron bg-white text-center py-32">
                    <h1 class="text-4xl font-bold mb-8">Halo Semua!</h1>
                    <p class="text-lg mb-8">Ini Aplikasi untuk kalian melihat jadwal event</p>
                    <button class="bg-blue-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Learn More</a>
                </div>
            </div>
        </div>
</x-app-layout>

