<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Dashboard') }}
            </h2>

            <!-- Tombol ke halaman Product -->
            <a href="{{ route('product.index') }}"
               class="inline-flex items-center px-4 py-2 bg-indigo-600 text-white text-sm font-medium rounded-md shadow hover:bg-indigo-700 transition">
                Lihat Produk
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 space-y-4">
                    <p>{{ __("You're logged in!") }}</p>

                    <!-- Tambahan link di dalam konten juga (opsional) -->
                    <a href="{{ route('product.index') }}"
                       class="inline-block text-indigo-600 font-semibold hover:underline">
                        Pergi ke halaman produk →
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
