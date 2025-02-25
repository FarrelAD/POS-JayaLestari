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
            <h1 class="text-2xl font-bold mb-4">Edit Transaction</h1>
            <form action="{{ route('pos.update', $transaction['id']) }}" method="POST"
                class="bg-white p-6 rounded-lg shadow-md">
                @csrf
                @method('PUT')

                <label class="block">Name:</label>
                <input type="text" name="name" value="{{ $transaction['name'] }}" class="border w-full p-2 rounded mb-2">

                <label class="block">Item:</label>
                <input type="text" name="item" value="{{ $transaction['item'] }}" class="border w-full p-2 rounded mb-2">

                <label class="block">Amount:</label>
                <input type="number" name="amount" value="{{ $transaction['amount'] }}"
                    class="border w-full p-2 rounded mb-2">

                <label class="block">Status:</label>
                <select name="status" class="border w-full p-2 rounded mb-2">
                    <option value="success" @if($transaction['status'] == 'success') selected @endif>Success</option>
                    <option value="pending" @if($transaction['status'] == 'pending') selected @endif>Pending</option>
                    <option value="failed" @if($transaction['status'] == 'failed') selected @endif>Failed</option>
                </select>

                <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded">Update</button>
            </form>
        </main>
    </div>


    <script>
        function toggleProductDropdown() {
            document.getElementById('productsDropdown').classList.toggle('hidden');
        }
    </script>
</body>

</html>