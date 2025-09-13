<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Categories Page</title>
    @vite('resources/css/app.css')
</head>
<body>
    <x-user-navbar ></x-user-navbar>

    <div class="bg-gray-100 flex flex-col items-center min-h-screen pt-5">
        <h2 class="text-2xl text-center text-green-800 mb-6 font-bold">
            category Name : {{ $category }}
          
        </h2>

        <div class="w-3/4 bg-white shadow-md rounded-lg overflow-hidden">
            <table class="min-w-full border border-gray-200 text-left">
                <thead class="bg-gray-100 border-b">
                    <tr>
                        <th class="py-3 px-4 font-semibold text-gray-700 w-1/6">Quiz Id</th>
                        <th class="py-3 px-4 font-semibold text-gray-700">Name</th>
                        <th class="py-3 px-4 font-semibold text-gray-700">Mcq Count</th>
                        <th class="py-3 px-4 font-semibold text-gray-700 text-center w-1/6">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($quizData as $item)
                    <tr class="even:bg-gray-100 hover:bg-gray-200 transition">
                        <td class="py-3 px-4">{{ $item->id }}</td>
                        <td class="py-3 px-4">{{ $item->name }}</td>
                        <td class="py-3 px-4">{{ $item->mcq_count }}</td>
                        <td class="py-3 px-4 text-center">
                            <a href="/start-quiz/{{$item->id}}/{{ $item->name}}" class="text-green-500 font-bold ">
                               Attempt Quiz
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
