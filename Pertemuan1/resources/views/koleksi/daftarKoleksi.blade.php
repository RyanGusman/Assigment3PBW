<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Daftar Koleksi') }}
        </h2>
    </x-slot>

    <!-- Ryan Gusman Yoel Banjarnahor 6706220098 -->

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-gray-900 dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-white dark:text-gray-100">
                    <a href="{{ route("koleksi.registrasi") }}">
                        <x-primary-button class="ml-4">
                            {{ __('Register') }}
                        </x-primary-button>
                    </a>
                    <div class="mt-6 relative overflow-x-auto shadow-md sm:rounded-lg">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-white">
                            <thead class="text-xs bg-gray-700 dark:bg-gray-800 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        No
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Nama Koleksi
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Jenis Koleksi
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        Jumlah Koleksi
                                    </th>
                                    <th colspan="2" scope="col" class="px-6 py-3 text-center">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($koleksi as $item)
                                    <tr class="bg-gray-800 dark:bg-gray-700 hover:bg-gray-700 dark:hover:bg-gray-600">
                                        <td class="px-6 py-4">
                                            {{ $loop->iteration }}
                                        </td>
                                        <td class="px-6 py-4 font-medium whitespace-nowrap">
                                            {{ $item->namaKoleksi }}
                                        </td>
                                        <td class="px-6 py-4">
                                            @if ($item->jenisKoleksi == 1)
                                                <span class="text-blue-500 dark:text-blue-400">Buku</span>
                                            @elseif ($item->jenisKoleksi == 2)
                                                <span class="text-green-500 dark:text-green-400">Majalah</span>
                                            @else
                                                <span class="text-red-500 dark:text-red-400">Cakram Digital</span>
                                            @endif
                                        </td>
                                        <td class="px-6 py-4">
                                            {{ $item->jumlahKoleksi }}
                                        </td>
                                        <td colspan="2" class="flex items-center justify-center gap-4 px-6 py-4">
                                            <button class="font-medium text-yellow-500 dark:text-yellow-400 hover:underline">Edit</button>
                                            <form action="{{ route("koleksi.infoKoleksi", $item) }}">
                                                <button type="submit" class="font-medium text-blue-500 dark:text-blue-400 hover:underline">View</button>
                                            </form>
                                            <button href="#" class="font-medium text-red-500 dark:text-red-400 hover:underline">Delete</button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
