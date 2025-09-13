<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Question</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <x-navbar name="{{ $name }}"></x-navbar>

    @if(session('category'))
        <div class="bg-green-800 text-white pl-5 py-2 rounded-md shadow mb-4 w-full text-center">
            {{ session('category') }}
        </div>
    @endif

@section('content')
<div class="container">
    <h3>Edit Question</h3>
    <form action="{{ route('mcqs.update', $mcq->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Question</label>
            <textarea name="question" class="form-control" required>{{ old('question',$mcq->question) }}</textarea>
        </div>

        <div class="row">
            <div class="col"><input name="a" value="{{ old('a',$mcq->a) }}" class="form-control" placeholder="Option A"></div>
            <div class="col"><input name="b" value="{{ old('b',$mcq->b) }}" class="form-control" placeholder="Option B"></div>
        </div>
        <div class="row mt-2">
            <div class="col"><input name="c" value="{{ old('c',$mcq->c) }}" class="form-control" placeholder="Option C"></div>
            <div class="col"><input name="d" value="{{ old('d',$mcq->d) }}" class="form-control" placeholder="Option D"></div>
        </div>

        <div class="mb-3 mt-2">
            <label>Correct Answer</label>
            <input name="correct_ans" value="{{ old('correct_ans',$mcq->correct_ans) }}" class="form-control">
        </div>

        <div class="mb-3">
            <label>Category</label>
            <select name="category_id" class="form-control" required>
                @foreach($categories as $c)
                    <option value="{{ $c->id }}" @selected($c->id == $mcq->category_id)>{{ $c->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label>Quiz</label>
            <select name="quiz_id" class="form-control" required>
                @foreach($quizzes as $q)
                    <option value="{{ $q->id }}" @selected($q->id == $mcq->quiz_id)>{{ $q->name }}</option>
                @endforeach
            </select>
        </div>

        <button class="btn btn-primary">Save</button>
    </form>
</div>
@endsection
</body>
</html>
