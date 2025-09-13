
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
    <h1 class="text-2xl font-bold mb-4">Edit MCQ</h1>

    <form action="{{ route('mcqs.update', $mcq->id) }}" method="POST" class="space-y-4 bg-white p-6 shadow rounded-lg">
        @csrf
        @method('PUT')

        <div>
            <label class="block font-medium">Question</label>
            <input type="text" name="question" 
                   value="{{ $mcq->question }}"
                   class="w-full border p-2 rounded" required>
        </div>

        <div>
            <label class="block font-medium">Option A</label>
            <input type="text" name="option_a" value="{{ $mcq->option_a }}" class="w-full border p-2 rounded" required>
        </div>

        <div>
            <label class="block font-medium">Option B</label>
            <input type="text" name="option_b" value="{{ $mcq->option_b }}" class="w-full border p-2 rounded" required>
        </div>

        <div>
            <label class="block font-medium">Option C</label>
            <input type="text" name="option_c" value="{{ $mcq->option_c }}" class="w-full border p-2 rounded" required>
        </div>

        <div>
            <label class="block font-medium">Option D</label>
            <input type="text" name="option_d" value="{{ $mcq->option_d }}" class="w-full border p-2 rounded" required>
        </div>

        <div>
            <label class="block font-medium">Correct Answer</label>
            <select name="answer" class="w-full border p-2 rounded" required>
                <option value="A" @if($mcq->answer=="A") selected @endif>Option A</option>
                <option value="B" @if($mcq->answer=="B") selected @endif>Option B</option>
                <option value="C" @if($mcq->answer=="C") selected @endif>Option C</option>
                <option value="D" @if($mcq->answer=="D") selected @endif>Option D</option>
            </select>
        </div>

        <div>
            <label class="block font-medium">Category</label>
            <select name="category_id" class="w-full border p-2 rounded">
                @foreach($categories as $cat)
                    <option value="{{ $cat->id }}" @if($mcq->category_id==$cat->id) selected @endif>
                        {{ $cat->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <div>
            <label class="block font-medium">Quiz</label>
            <select name="quiz_id" class="w-full border p-2 rounded">
                @foreach($quizzes as $quiz)
                    <option value="{{ $quiz->id }}" @if($mcq->quiz_id==$quiz->id) selected @endif>
                        {{ $quiz->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" 
                class="px-4 py-2 bg-green-500 text-white rounded">Update</button>
    </form>
</div>


</body>
</html>