<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Product</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100">
    @include('layouts.navbar')

    <div class="container mx-auto p-5">
        <h1 class="text-2xl font-bold mb-6">Edit Product</h1>
        <div class="bg-white shadow-md rounded-lg p-6">
            <form action="{{ route('products.update', $product) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-4">
                    <label for="kodeBarang" class="block text-sm font-medium text-gray-700">Kode Barang</label>
                    <input type="text" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-blue-300"
                        id="kodeBarang" name="kodeBarang" value="{{ $product->kodeBarang }}" readonly>
                </div>
                <div class="mb-4">
                    <label for="namaProduct" class="block text-sm font-medium text-gray-700">Nama Product</label>
                    <input type="text" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-blue-300"
                        id="namaProduct" name="namaProduct" value="{{ $product->namaProduct }}" required>
                </div>
                <div class="mb-4">
                    <label for="quantity" class="block text-sm font-medium text-gray-700">Quantity</label>
                    <input type="number" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-blue-300"
                        id="quantity" name="quantity" value="{{ $product->quantity }}" required>
                </div>
                <div class="mb-4">
                    <label for="harga" class="block text-sm font-medium text-gray-700">Harga</label>
                    <input type="number" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-blue-300"
                        id="harga" name="harga" step="0.01" value="{{ $product->harga }}" required>
                </div>
                <button type="submit" class="w-full bg-blue-600 text-white font-semibold py-2 rounded-md hover:bg-blue-500 transition duration-200">Update Product</button>
            </form>
        </div>
    </div>
</body>

</html>
