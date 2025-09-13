
<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <x-navbar name={{$name}}></x-navbar>

<div class="p-6 max-w-2xl mx-auto">
    <h1 class="text-2xl font-bold mb-4">Add New MCQ</h1>

    <form action="{{ route('mcqs.store') }}" method="POST" class="space-y-4 bg-white p-6 shadow rounded-lg">
        @csrf

        <input type="text" name="question" placeholder="Question" class="w-full border p-2 rounded" required>
        <input type="text" name="option_a" placeholder="Option A" class="w-full border p-2 rounded" required>
        <input type="text" name="option_b" placeholder="Option B" class="w-full border p-2 rounded" required>
        <input type="text" name="option_c" placeholder="Option C" class="w-full border p-2 rounded" required>
        <input type="text" name="option_d" placeholder="Option D" class="w-full border p-2 rounded" required>

        <select name="answer" class="w-full border p-2 rounded" required>
            <option value="">Select Correct Answer</option>
            <option value="A">Option A</option>
            <option value="B">Option B</option>
            <option value="C">Option C</option>
            <option value="D">Option D</option>
        </select>

        <select name="category_id" class="w-full border p-2 rounded" required>
            <option value="">Select Category</option>
            @foreach($categories as $cat)
                <option value="{{ $cat->id }}">{{ $cat->name }}</option>
            @endforeach
        </select>

        <select name="quiz_id" class="w-full border p-2 rounded" required>
            <option value="">Select Quiz</option>
            @foreach($quizzes as $quiz)
                <option value="{{ $quiz->id }}">{{ $quiz->name }}</option>
            @endforeach
        </select>

        <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded">Save</button>
    </form>
</div>


    
</body>
</html>