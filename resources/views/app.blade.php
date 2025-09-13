
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Quiz System</title>
     @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 text-gray-800">
 <x-navbar name="{{ $name }}"></x-navbar>
    <!-- Navbar -->
    <nav class="bg-white shadow p-4 flex justify-between">
        <div class="text-xl font-bold">Quiz System</div>
        <div class="space-x-4">
            <a href="{{ route('dashboard') }}" class="hover:text-blue-600">Dashboard</a>
            <a href="#" class="hover:text-blue-600">Categories</a>
            <a href="#" class="hover:text-blue-600">Quiz</a>
            <a href="#" class="hover:text-blue-600">Logout</a>
        </div>
    </nav>

    <!-- Content -->
    <main class="py-6">
        @yield('content')
    </main>

</body>
</html>
