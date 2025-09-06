<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard - AdaKamar</title>
    @vite('resources/css/app.css') {{-- Tailwind --}}
</head>
<body class="bg-purple-200 text-purple-900 min-h-screen flex">

    
    {{-- Sidebar --}}
    @include('layouts.sidebar')

    <div class="flex-1 flex flex-col">
        {{-- Navbar --}}
        @include('layouts.navbar')

        {{-- Content --}}
        <main class="p-6 grid grid-cols-1 lg:grid-cols-3 gap-6">
            @yield('content')
        </main>
    </div>

</body>
</html>
