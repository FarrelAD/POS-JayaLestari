<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POS Jaya Lestari</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100">
    <div class="flex h-screen">
        <div class="w-64 bg-blue-900 text-white p-5 space-y-6">
            <h1 class="text-2xl font-bold">Jaya Lestari</h1>
            <nav>
                <a href="{{ route('dashboard') }}" class="block py-2 px-4 hover:bg-blue-700 rounded">Dashboard</a>
                <div>
                    <button onclick="toggleProductDropdown()"
                        class="block w-full text-left py-2 px-4 hover:bg-blue-700 rounded">Products</button>
                    <div id="productsDropdown" class="hidden pl-4">
                        <a href="{{ route('food-beverage') }}" class="block py-2 px-4 hover:bg-blue-600 rounded">Food
                            Beverage</a>
                        <a href="{{ route('beauty-health') }}" class="block py-2 px-4 hover:bg-blue-600 rounded">Beauty
                            Health</a>
                        <a href="{{ route('home-care') }}" class="block py-2 px-4 hover:bg-blue-600 rounded">Home
                            Care</a>
                        <a href="{{ route('baby-kid') }}" class="block py-2 px-4 hover:bg-blue-600 rounded">Baby Kid</a>
                    </div>
                </div>
                <a href="{{ route('users') }}" class="block py-2 px-4 hover:bg-blue-700 rounded">Users</a>
                <a href="{{ route('pos.index') }}" class="block py-2 px-4 hover:bg-blue-700 rounded">Transactions</a>
            </nav>
        </div>

        <main class="flex-1 p-6">
            <h1 class="text-2xl font-bold mb-4">Transaction Details</h1>
            <div class="bg-white p-6 rounded-lg shadow-md">
                <p><strong>ID:</strong> {{ $transaction['id'] }}</p>
                <p><strong>Name:</strong> {{ $transaction['name'] }}</p>
                <p><strong>Item:</strong> {{ $transaction['item'] }}</p>
                <p><strong>Amount:</strong> {{ $transaction['amount'] }}</p>
                <p><strong>Status:</strong>
                    <span class="px-2 py-1 rounded text-white 
                @if($transaction['status'] == 'success') bg-green-500 
                @elseif($transaction['status'] == 'pending') bg-yellow-500 
                @else bg-red-500 @endif">
                        {{ ucfirst($transaction['status']) }}
                    </span>
                </p>
            </div>
            <a href="{{ route('pos.index') }}"
                class="mt-4 inline-block px-4 py-2 bg-gray-500 text-white rounded">Back</a>
        </main>
    </div>


    <script>
        function toggleProductDropdown() {
            document.getElementById('productsDropdown').classList.toggle('hidden');
        }
    </script>
</body>

</html>