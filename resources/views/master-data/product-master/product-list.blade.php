<x-app-layout>
    <div class="max-w-5xl mx-auto mt-10 bg-white p-6 rounded-lg shadow">
        <h2 class="text-2xl font-bold mb-4">Daftar Produk</h2>

        @if(session('success'))
            <div class="bg-green-100 text-green-700 p-3 mb-4 rounded">
                {{ session('success') }}
            </div>
        @endif

        <a href="{{ route('products.create') }}" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">
            + Tambah Produk
        </a>

        <table class="w-full mt-4 border border-gray-200">
            <thead class="bg-gray-100">
                <tr>
                    <th class="border px-3 py-2">#</th>
                    <th class="border px-3 py-2">Nama Produk</th>
                    <th class="border px-3 py-2">Unit</th>
                    <th class="border px-3 py-2">Tipe</th>
                    <th class="border px-3 py-2">Qty</th>
                    <th class="border px-3 py-2">Produsen</th>
                    <th class="border px-3 py-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $index => $p)
                    <tr>
                        <td class="border px-3 py-2 text-center">{{ $index + 1 }}</td>
                        <td class="border px-3 py-2">{{ $p->product_name }}</td>
                        <td class="border px-3 py-2">{{ $p->unit }}</td>
                        <td class="border px-3 py-2">{{ $p->type }}</td>
                        <td class="border px-3 py-2">{{ $p->qty }}</td>
                        <td class="border px-3 py-2">{{ $p->producer }}</td>
                        <td class="border px-3 py-2 text-center">
                            <a href="{{ route('products.edit', $p->id) }}" class="text-blue-600 hover:underline">Edit</a> |
                            <form action="{{ route('products.destroy', $p->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:underline" onclick="return confirm('Yakin hapus?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
