<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Event Table') }}
        </h2>
    </x-slot>


    <!-- Panel About -->
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("Ini halaman Tabel event organizer") }}
                </div>
                <table class="table-auto w-full text-left bg-white rounded-lg shadow-md mx-auto px-4 mt-5">
                    <thead class="text-center">
                        <tr class="bg-gray-200">
                            <th class="px-4 py-2">Name</th>
                            <th class="px-4 py-2">Email</th>
                            <th class="px-4 py-2">Date</th>
                        </tr>
                    </thead>

                    <!-- Bagian Resource -->


                    <tbody class="container text-center">
                        <tr class="border-b">
                            <td class="px-4 py-2">
                                <!-- tempat naro variabel  -->
                                event_org
                            </td>
                            <td class="px-4 py-2">
                                <!-- tempat naro variabel  -->
                                event_org@gmail.com
                            </td>
                            <td class="px-4 py-2">
                                <!-- tempat naro variabel  -->
                                Besok
                            </td>
                        </tr>
                    </tbody>
                    <!-- Bagian Resource -->
                </table>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>


    </div>
    <!-- Penutup Component -->
</x-app-layout>