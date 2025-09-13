<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Categories Page</title>
    @vite('resources/css/app.css')
</head>
<body>
    <x-navbar name="{{ $name }}"></x-navbar>

    <div class="bg-gray-100 flex flex-col items-center min-h-screen pt-5">
        <h2 class="text-2xl text-center text-gray-800 mb-6">
            category Name : {{ $category }}
            <a class="text-yellow-500 text-sm ml-2" href="/add-quiz">Back</a>
        </h2>

        <div class="w-3/4 bg-white shadow-md rounded-lg overflow-hidden">
            <table class="min-w-full border border-gray-200 text-left">
                <thead class="bg-gray-100 border-b">
                    <tr>
                        <th class="py-3 px-4 font-semibold text-gray-700 w-1/6">Quiz Id</th>
                        <th class="py-3 px-4 font-semibold text-gray-700">Name</th>
                        <th class="py-3 px-4 font-semibold text-gray-700 text-center w-1/6">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($quizData as $item)
                    <tr class="even:bg-gray-100 hover:bg-gray-200 transition">
                        <td class="py-3 px-4">{{ $item->id }}</td>
                        <td class="py-3 px-4">{{ $item->name }}</td>
                        <td class="py-3 px-4 text-center">
                            <a href="/show-quiz/{{ $item->id }}/{{ $item->name }}" class="inline-block">
                                <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#000000">
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
