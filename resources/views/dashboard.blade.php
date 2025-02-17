<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POS Jaya Lestari</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100">
    <div class="flex h-screen">
        <div class="w-64 bg-blue-900 text-white p-5 space-y-6">
            <h1 class="text-2xl font-bold">Jaya Lestari</h1>
            <nav>
                <a href="{{ route('dashboard') }}" class="block py-2 px-4 hover:bg-blue-700 rounded">Dashboard</a>
                <div>
                    <button onclick="toggleProductDropdown()" class="block w-full text-left py-2 px-4 hover:bg-blue-700 rounded">Products</button>
                    <div id="productsDropdown" class="hidden pl-4">
                        <a href="{{ route('food-beverage') }}" class="block py-2 px-4 hover:bg-blue-600 rounded">Food Beverage</a>
                        <a href="{{ route('beauty-health') }}" class="block py-2 px-4 hover:bg-blue-600 rounded">Beauty Health</a>
                        <a href="{{ route('home-care') }}" class="block py-2 px-4 hover:bg-blue-600 rounded">Home Care</a>
                        <a href="{{ route('baby-kid') }}" class="block py-2 px-4 hover:bg-blue-600 rounded">Baby Kid</a>
                    </div>
                </div>
                <a href="{{ route('users') }}" class="block py-2 px-4 hover:bg-blue-700 rounded">Users</a>
            </nav>
        </div>

        <main class="flex-1 p-6">
            <div class="flex justify-between items-center bg-white p-4 shadow rounded-lg">
                <h2 class="text-xl font-semibold">Dashboard</h2>
                <button class="bg-blue-600 text-white px-4 py-2 rounded">Logout</button>
            </div>

            <div class="grid grid-cols-3 gap-6 mt-6">
                <div class="bg-white p-6 shadow rounded-lg">
                    <h3 class="text-lg font-semibold">Total Sales</h3>
                    <p class="text-2xl font-bold">$12,450</p>
                </div>
                <div class="bg-white p-6 shadow rounded-lg">
                    <h3 class="text-lg font-semibold">Products Sold</h3>
                    <p class="text-2xl font-bold">320</p>
                </div>
                <div class="bg-white p-6 shadow rounded-lg">
                    <h3 class="text-lg font-semibold">Customers</h3>
                    <p class="text-2xl font-bold">85</p>
                </div>
            </div>

            <div class="mt-6 bg-white p-6 shadow rounded-lg">
                <h3 class="text-lg font-semibold mb-4">Recent Transactions</h3>
                <table class="w-full text-left border-collapse">
                    <thead>
                        <tr class="bg-gray-200">
                            <th class="p-2">Date</th>
                            <th class="p-2">Customer</th>
                            <th class="p-2">Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="border-t">
                            <td class="p-2">2025-02-17</td>
                            <td class="p-2">John Doe</td>
                            <td class="p-2">$250</td>
                        </tr>
                        <tr class="border-t">
                            <td class="p-2">2025-02-16</td>
                            <td class="p-2">Jane Smith</td>
                            <td class="p-2">$130</td>
                        </tr>
                        <tr class="border-t">
                            <td class="p-2">2025-02-15</td>
                            <td class="p-2">Michael Brown</td>
                            <td class="p-2">$320</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </main>
    </div>


    <script>
        function toggleProductDropdown() {
            document.getElementById('productsDropdown').classList.toggle('hidden');
        }
    </script>
</body>

</html>