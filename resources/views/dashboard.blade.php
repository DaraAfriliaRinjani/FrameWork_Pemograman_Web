<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Dashboard') }}
            </h2>

            <!-- Tombol Ganjil & Genap -->
            <div class="flex space-x-2">
                <a href="{{ route('product.index', ['msg' => 'ganjil']) }}"
                   class="px-4 py-2 bg-white border border-gray-300 text-gray-700 text-sm font-medium rounded-md shadow hover:bg-gray-100 transition">
                    Ganjil
                </a>

                <a href="{{ route('product.index', ['msg' => 'genap']) }}"
                   class="px-4 py-2 bg-white border border-gray-300 text-gray-700 text-sm font-medium rounded-md shadow hover:bg-gray-100 transition">
                    Genap
                </a>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 space-y-4">
                    <p>{{ __("You're logged in!") }}</p>

                    <!-- Link tambahan di dalam konten -->
                    <a href="{{ route('product.index', ['msg' => 'ganjil']) }}"
                       class="inline-block text-indigo-600 font-semibold hover:underline">
                        Pergi ke halaman produk ganjil →
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
