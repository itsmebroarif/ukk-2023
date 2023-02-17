<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Form Input Data') }}
        </h2>
    </x-slot>


    <!-- Panel About -->
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="container mx-auto px-4 mt-5">
                    <form class="bg-white p-6 rounded-xl">
                        <h2 class="text-3xl font-sans mb-6">Form Input</h2>
                        <div class="mb-4">
                            <label class="block text-gray-700 font-medium mb-2" for="name">
                                Name
                            </label>
                            <input placeholder="Insert Your name" class="border rounded-lg border-gray-400 p-2 w-full" type="text" id="name" name="name">
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700 font-medium mb-2" for="email">
                                Email
                            </label>
                            <input placeholder="Insert Your Email" class="border rounded-lg border-gray-400 p-2 w-full" type="email" id="email" name="email">
                        </div>
                        <div class="mb-4">
                            <label class="block text-gray-700 font-medium mb-2" for="message">
                                Message
                            </label>
                            <textarea placeholder="Insert Your Message" class="border rounded-lg border-gray-400 p-2 w-full" id="message" name="message"></textarea>
                        </div>
                        <button class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600">Submit</button>
                    </form>

                </div>



            </div>
        </div>
    </div>
    </div>
    <!-- Penutup Component -->
</x-app-layout>