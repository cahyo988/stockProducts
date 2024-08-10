<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Products</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100">
    @include('layouts.navbar')

    <div class="container mx-auto p-5">
        <h1 class="text-2xl font-bold mb-4">Products</h1>
        <a href="{{ route('products.create') }}" class="bg-blue-600 text-white font-semibold py-2 px-4 rounded-md mb-3 hover:bg-blue-500 transition duration-200">Add New Product</a>
        
        <div class="overflow-x-auto bg-white shadow-md rounded-lg">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Kode Barang</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama Product</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Quantity</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Harga</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($products as $product)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $product->kodeBarang }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $product->namaProduct }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $product->quantity }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ number_format($product->harga, 2) }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <a href="{{ route('products.edit', $product) }}" class="bg-yellow-500 text-white font-semibold py-1 px-3 rounded-md hover:bg-yellow-400 transition duration-200">Edit</a>
                                <a href="{{ route('products.buy', $product) }}" class="bg-green-600 text-white font-semibold py-1 px-3 rounded-md hover:bg-green-500 transition duration-200">Buy</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
