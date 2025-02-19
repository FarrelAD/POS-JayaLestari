<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POS Jaya Lestari</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100">
    <div class="w-64 bg-blue-900 text-white p-5 space-y-6 fixed top-0 left-0 h-screen">
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
        </nav>
    </div>


    <main class="flex-1 p-6 ml-64">
        <div class="mt-6 bg-white p-6 shadow rounded-lg">
            <h3 class="text-lg font-semibold mb-4">Baby Kid</h3>

            <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @foreach ($products as $product)
                <div class="bg-gray-200 p-4 rounded-lg shadow flex flex-col items-center">
                    <img src="{{ $product['image'] }}" alt="{{ $product['title'] }}" class="w-full h-32 object-cover rounded">
                    <h4 class="text-md font-semibold mt-2">{{ $product['title'] }}</h4>
                    <p class="text-gray-600 font-bold">${{ number_format($product['price'], 2) }}</p>
                    <p class="text-sm text-gray-700 text-center mt-1">{{ $product['category'] }}</p>
                    <div class="flex items-center mt-2">
                        <span class="text-yellow-500 text-lg">&#9733;</span>
                        <span class="ml-1 text-sm">{{ $product['rating']['rate'] }} ({{ $product['rating']['count'] }} reviews)</span>
                    </div>
                </div>
            @endforeach
            </div>
        </div>
    </main>


    <script>
        function toggleProductDropdown() {
            document.getElementById('productsDropdown').classList.toggle('hidden');
        }
    </script>
</body>

</html>