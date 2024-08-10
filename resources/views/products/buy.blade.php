<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Buy Product</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100">
    @include('layouts.navbar')

    <div class="container mx-auto p-5">
        <h1 class="text-2xl font-bold mb-5">Buy Product: {{ $product->namaProduct }}</h1>

        <div class="bg-white shadow-md rounded-lg p-6">
            @if (session('error'))
                <div class="mb-4 p-4 text-red-700 bg-red-100 rounded-md">
                    {{ session('error') }}
                </div>
            @endif

            <form action="{{ route('products.purchase', $product) }}" method="POST">
                @csrf
                <div class="mb-4">
                    <label for="kodeBarang" class="block text-sm font-medium text-gray-700">Kode Barang</label>
                    <input type="text" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-blue-300"
                        id="kodeBarang" name="kodeBarang" value="{{ $product->kodeBarang }}" readonly>
                </div>
                <div class="mb-4">
                    <label for="namaProduct" class="block text-sm font-medium text-gray-700">Nama Product</label>
                    <input type="text" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-blue-300"
                        id="namaProduct" value="{{ $product->namaProduct }}" readonly>
                </div>
                <div class="mb-4">
                    <label for="availableQuantity" class="block text-sm font-medium text-gray-700">Available Quantity</label>
                    <input type="number" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-blue-300"
                        id="availableQuantity" value="{{ $product->quantity }}" readonly>
                </div>
                <div class="mb-4">
                    <label for="quantity" class="block text-sm font-medium text-gray-700">Quantity to Buy</label>
                    <input type="number" class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring focus:ring-blue-300"
                        id="quantity" name="quantity" min="1" max="{{ $product->quantity }}" required>
                </div>
                <button type="submit" class="w-full bg-blue-600 text-white font-semibold py-2 rounded-md hover:bg-blue-500 transition duration-200">Purchase</button>
            </form>
        </div>
    </div>
</body>

</html>
