<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Data Master / Create Product') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="container mx-auto">
                        <h2 class="mb-6 text-2xl font-bold text-gray-800">🛍️ Create New Product</h2>

                        <!-- Notifikasi sukses -->
                        <x-auth-session-status class="mb-4" :status="session('success')" />

                        <form action="{{ route('product-store') }}" method="POST" class="space-y-5">
                            @csrf
                            
                            <!-- Product Name -->
                            <div>
                                <label for="product_name" class="block text-sm font-medium text-gray-700">Product Name</label>
                                <input type="text" id="product_name" name="product_name"
                                    class="block w-full p-2 mt-1 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                    required>
                            </div>

                            <!-- Unit -->
                            <div>
                                <label for="unit" class="block text-sm font-medium text-gray-700">Unit</label>
                                <select id="unit" name="unit"
                                    class="block w-full p-2 mt-1 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                    required>
                                    <option value="" disabled selected>Select a unit</option>
                                    <option value="kg">Kilogram (kg)</option>
                                    <option value="ltr">Liter (ltr)</option>
                                    <option value="pcs">Pieces (pcs)</option>
                                    <option value="box">Box</option>
                                </select>
                            </div>

                            <!-- Type -->
                            <div>
                                <label for="type" class="block text-sm font-medium text-gray-700">Type</label>
                                <input type="text" id="type" name="type"
                                    class="block w-full p-2 mt-1 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                    required>
                            </div>

                            <!-- Information -->
                            <div>
                                <label for="information" class="block text-sm font-medium text-gray-700">Information</label>
                                <textarea id="information" name="information" rows="3"
                                    class="block w-full p-2 mt-1 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"></textarea>
                            </div>

                            <!-- Quantity -->
                            <div>
                                <label for="qty" class="block text-sm font-medium text-gray-700">Quantity</label>
                                <input type="number" id="qty" name="qty"
                                    class="block w-full p-2 mt-1 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                    required>
                            </div>

                            <!-- Producer -->
                            <div>
                                <label for="producer" class="block text-sm font-medium text-gray-700">Producer</label>
                                <input type="text" id="producer" name="producer"
                                    class="block w-full p-2 mt-1 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"
                                    required>
                            </div>

                            <!-- Tombol Aksi -->
                            <div class="flex justify-end space-x-3 pt-4">
                                <a href="{{ route('products.list') }}"
                                    class="px-4 py-2 text-sm font-medium text-gray-700 bg-gray-200 border border-gray-300 rounded-md hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-400">
                                    CANCEL
                                </a>
                                <button type="submit"
                                    class="px-4 py-2 text-sm font-medium text-gray-700 bg-gray-200 border border-gray-300 rounded-md hover:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-400">
                                    SUBMIT
                                </button>
                            </div>
                        </form>

                        @vite('resources/js/app.js')
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

