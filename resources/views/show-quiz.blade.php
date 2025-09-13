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
            Quiz Name : {{ $quizName }}
            <a class="text-yellow-500 text-sm ml-2" href="/add-quiz">Back</a>
        </h2>

        <div class="w-3/4 bg-white shadow-md rounded-lg overflow-hidden">
            <table class="min-w-full border border-gray-200 text-left">
                <thead class="bg-gray-100 border-b">
                    <tr>
                        <th class="py-3 px-4 font-semibold text-gray-700 w-1/6">MCQ Id</th>
                        <th class="py-3 px-4 font-semibold text-gray-700">Question</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($mcqs as $mcq)
                    <tr class="even:bg-gray-100 hover:bg-gray-200 transition">
                        <td class="py-3 px-4">{{ $mcq->id }}</td>
                        <td class="py-3 px-4">{{ $mcq->question }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
