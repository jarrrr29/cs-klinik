<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Klinik CS')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-800">

    <header class="bg-blue-600 text-white py-4 mb-6">
        <div class="container mx-auto px-4">
            <h1 class="text-2xl font-bold">Klinik CS - Dashboard</h1>
        </div>
    </header>

    <main class="container mx-auto px-4">
        @yield('content')
    </main>

    <footer class="text-center text-sm text-gray-500 mt-10 py-4">
        &copy; {{ date('Y') }} Klinik CS - Fajar Anugrah
    </footer>

</body>
</html>
