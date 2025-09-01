<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" class="">
    <title class="">Loan Application</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" class="">
    @vite('resources/css/app.css')  {{-- If using Vite with Tailwind --}}
</head>
<body class="bg-gray-100 min-h-screen">
    <header class="/* bg-blue-600 not found */ /* text-white not found */ p-4">
        <div class="container mx-auto mx-auto">
            <h1 class="/* text-xl not found */ /* font-bold not found */">Banks Ethiopia</h1>
        </div>
    </header>

    <main class="/* py-6 not found */">
        @yield('content')
    </main>

    <footer class="/* bg-gray-200 not found */ text-center p-4 /* mt-6 not found */">
        © {{ date('Y') }} Banks Ethiopia. All rights reserved.
    </footer>
</body>
</html>





    
