<x-master-data title="Edit Produk">
    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="product_name" class="form-label">Nama Produk</label>
            <input type="text" name="product_name" id="product_name" class="form-control" value="{{ $product->product_name }}" required>
        </div>

        <div class="mb-3">
            <label for="unit" class="form-label">Unit</label>
            <input type="text" name="unit" id="unit" class="form-control" value="{{ $product->unit }}" required>
        </div>

        <div class="mb-3">
            <label for="type" class="form-label">Tipe</label>
            <input type="text" name="type" id="type" class="form-control" value="{{ $product->type }}" required>
        </div>

        <div class="mb-3">
            <label for="qty" class="form-label">Qty</label>
            <input type="number" name="qty" id="qty" class="form-control" value="{{ $product->qty }}" required>
        </div>

        <div class="mb-3">
            <label for="producer" class="form-label">Produsen</label>
            <input type="text" name="producer" id="producer" class="form-control" value="{{ $product->producer }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Update</button>
        <a href="{{ route('products.list') }}" class="btn btn-secondary">Kembali</a>
    </form>
</x-master-data>
