<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Produk</title>
</head>
<body>
    <h1>Edit Produk</h1>
    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="name">Nama Produk:</label>
        <input type="text" name="name" id="name" value="{{ $product->name }}" required>
        
        <label for="description">Deskripsi:</label>
        <textarea name="description" id="description" required>{{ $product->description }}</textarea>
        
        <label for="price">Harga:</label>
        <input type="number" name="price" id="price" value="{{ $product->price }}" required>
        
        <label for="stock">Stok:</label>
        <input type="number" name="stock" id="stock" value="{{ $product->stock }}" required>

        <button type="submit">Perbarui</button>
    </form>
</body>
</html>
