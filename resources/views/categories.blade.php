<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Categories Page</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <x-navbar name="{{ $name }}"></x-navbar>

    @if(session('category'))
        <div class="bg-green-800 text-white pl-5 py-2 rounded-md shadow mb-4 w-full text-center">
            {{ session('category') }}
        </div>
    @endif

    <div class="bg-gray-100 flex flex-col items-center min-h-screen pt-5">
        <!-- Add Category Form -->
        <div class="bg-white p-8 rounded-2xl shadow-lg w-full max-w-sm">
            <h2 class="text-2xl text-center text-gray-800 mb-6">Add Category</h2>
            <form action="/add-category" method="post" class="space-y-4">
                @csrf
                <div>
                    <input type="text" placeholder="Enter Category Name" name="category"
                        class="w-full px-4 py-2 border border-gray-300 rounded-xl focus:outline-none focus:ring-2 focus:ring-blue-400">
                    @error('category')
                        <div class="text-red-500 text-sm mt-1">{{ $message }}</div>
                    @enderror
                </div>
                <button type="submit"
                    class="w-full bg-blue-500 hover:bg-blue-600 rounded-xl px-4 py-2 text-white font-semibold transition">
                    Add
                </button>
            </form>
        </div>

        <!-- Category List Table -->
        <div class="w-[800px] mx-auto mt-8 bg-white shadow-md rounded-lg overflow-hidden">
            <h1 class="text-2xl text-blue-500 font-semibold p-4 border-b">Category List</h1>

            <table class="min-w-full text-left">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-4 py-3 font-semibold text-gray-700 border">S. No</th>
                        <th class="px-4 py-3 font-semibold text-gray-700 border">Name</th>
                        <th class="px-4 py-3 font-semibold text-gray-700 border">Creator</th>
                        <th class="px-4 py-3 font-semibold text-gray-700 border text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categories as $category)
                    <tr class="even:bg-gray-50 hover:bg-gray-100 transition text-center">
                        <td class="px-4 py-3 border">{{ $category->id }}</td>
                        <td class="px-4 py-3 border text-left">{{ $category->name }}</td>
                        <td class="px-4 py-3 border">{{ $category->creator }}</td>
                        <td class="px-4 py-3 border flex justify-center space-x-4">
                            <!-- Delete Button -->
                            <a href="category/delete/{{ $category->id }}" class="hover:text-red-600">
                                <svg xmlns="http://www.w3.org/2000/svg" height="20px" viewBox="0 -960 960 960" width="20px" fill="currentColor">
                                    <path d="M312-144q-29.7 0-50.85-21.15Q240-186.3 240-216v-480h-48v-72h192v-48h192v48h192v72h-48v479.57Q720-186 698.85-165T648-144H312Zm336-552H312v480h336v-480ZM384-288h72v-336h-72v336Zm120 0h72v-336h-72v336ZM312-696v480-480Z"/>
                                </svg>
                            </a>
                            <!-- View Quiz Button -->
                            <a href="quiz-list/{{ $category->id }}/{{ $category->name }}" class="hover:text-blue-600">
                                <svg xmlns="http://www.w3.org/2000/svg" height="22px" viewBox="0 -960 960 960" width="22px" fill="currentColor">
                                    <path d="M480-320q75 0 127.5-52.5T660-500q0-75-52.5-127.5T480-680q-75 0-127.5 52.5T300-500q0 75 52.5 127.5T480-320Zm0-72q-45 0-76.5-31.5T372-500q0-45 31.5-76.5T480-608q45 0 76.5 31.5T588-500q0 45-31.5 76.5T480-392Zm0 192q-146 0-266-81.5T40-500q54-137 174-218.5T480-800q146 0 266 81.5T920-500q-54 137-174 218.5T480-200Z"/>
                                </svg>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
