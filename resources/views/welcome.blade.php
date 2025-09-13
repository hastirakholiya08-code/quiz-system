<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Categories Page</title>
    @vite('resources/css/app.css')
</head>
<body>
    <x-user-navbar></x-user-navbar>

    <div class="flex flex-col min-h-screen items-center bg-gray-100">
        <!-- Title -->
        <h2 class="text-4xl font-bold  text-green-900 p-5">Check Your Skills</h2>

        <!-- Search Box -->
        <div class="w-full max-w-md">
            <div class="relative">
                <input 
                    class="w-full px-4 py-3 text-gray-700 border border-gray-300 rounded-2xl shadow focus:outline-none focus:ring-2 focus:ring-green-600" 
                    type="text" 
                    placeholder="Search quiz...">
                <button class="absolute right-3 top-3 text-gray-600 hover:text-black">
                    <svg xmlns="http://www.w3.org/2000/svg" height="22px" viewBox="0 -960 960 960" width="22px" fill="currentColor">
                        <path d="M784-120 532-372q-30 24-69 38t-83 14q-109 0-184.5-75.5T120-580q0-109 75.5-184.5T380-840q109 0 184.5 75.5T640-580q0 44-14 83t-38 69l252 252-56 56ZM380-400q75 0 127.5-52.5T560-580q0-75-52.5-127.5T380-760q-75 0-127.5 52.5T200-580q0 75 52.5 127.5T380-400Z"/>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Category List Title -->
        <h1 class="text-2xl text-green-900 font-semibold p-4 my-4 text-center">Category List</h1>

        <!-- Table (Bigger Box) -->
        <div class="w-[1200px] max-w-6xl mx-auto bg-white shadow-lg rounded-xl overflow-hidden">
            <table class="min-w-full text-left">
                <thead class="bg-gray-200">
                    <tr>
                        <th class="px-10 py-3 font-semibold text-gray-700">S. No</th>
                        <th class="px-10 py-3 font-semibold text-gray-700">Name</th>
                        <th class="px-10 py-3 font-semibold text-gray-700">Quiz Count</th>
                        <th class="px-10 py-3 font-semibold text-gray-700 text-center">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($categories as $key=>$category)
                    <tr class="even:bg-gray-100 hover:bg-gray-200 transition">
                        <td class="px-10 py-3 text-center">{{ $key+1 }}</td>  
                        <td class="px-10 py-3">{{ $category->name }}</td>
                         <td class="px-10 py-3 ">{{ $category->quizzes_count }}</td>
                        <td class="px-10 py-3 flex justify-center">
                            <a href="user-quiz-list/{{ $category->id }}/{{ $category->name }}" class="hover:text-green-700">
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
    <x-footer-user></x-footer-user>
</body>
</html>
