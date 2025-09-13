<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-50">

    <x-navbar name="{{ $name }}"></x-navbar>

    <div class="max-w-6xl mx-auto p-6">
        <h2 class="text-2xl font-bold mb-4">All MCQs</h2>
          
        @if(session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-2 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <a href="{{ route('mcqs.create') }}" 
           class="bg-blue-500 text-white px-4 py-2 rounded mb-4 inline-block hover:bg-blue-600">
            Add New MCQ
        </a>

        <table class="w-full border-collapse border bg-white shadow rounded">
            <thead>
                <tr class="bg-gray-200">
                    <th class="border px-3 py-2">Question</th>
                    <th class="border px-3 py-2">Quiz</th>
                    <th class="border px-3 py-2">Category</th>
                    <th class="border px-3 py-2">Answer</th>
                    <th class="border px-3 py-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($mcqs as $mcq)
                    <tr class="hover:bg-gray-100">
                        <td class="border px-3 py-2">{{ $mcq->question }}</td>
                        <td class="border px-3 py-2">{{ $mcq->quiz->name ?? 'N/A' }}</td>
                        <td class="border px-3 py-2">{{ $mcq->quiz->category->name ?? 'N/A' }}</td>
                        <td class="border px-3 py-2">{{ $mcq->correct_ans }}</td>
                        <td class="border px-3 py-2">
                            <a href="{{ route('mcqs.edit', $mcq->id) }}" class="text-blue-600 hover:underline">Edit</a>
                            |
                            <form action="{{ route('mcqs.destroy', $mcq->id) }}" method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button onclick="return confirm('Delete this MCQ?')" class="text-red-600 hover:underline">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
 
        <div class="mt-4">
           {{ $mcqs->links('pagination::tailwind') }}
        </div>
    </div>

</body>
</html>
