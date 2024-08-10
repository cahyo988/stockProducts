<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Penjualan</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100">
    @include('layouts.navbar')

    <div class="container mx-auto p-5">
        <h1 class="text-2xl font-bold mb-4">Sales</h1>

        <div class="overflow-x-auto bg-white shadow-md rounded-lg">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tanggal</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">User</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Kode Barang</th>
                        <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Quantity Terjual</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach($sales as $sale)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">{{ \Carbon\Carbon::parse($sale->tanggal)->format('d-m-Y') }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $sale->user->name }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $sale->kodeBarang }}</td>
                            <td class="px-6 py-4 whitespace-nowrap">{{ $sale->quantityTerjual }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
