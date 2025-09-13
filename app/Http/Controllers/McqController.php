<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mcq;
use App\Models\Category;
use App\Models\Quiz;

class McqController extends Controller
{
    public function index()
    {
      
        $mcqs = Mcq::with(['quiz.category'])->paginate(10);
        return view('mcqs.index', compact('mcqs'));
    }

   public function create()
{
    $categories = Category::all();
    $quizzes = Quiz::all();
    $name = "Admin"; 

    return view('mcqs.create', compact('categories', 'quizzes', 'name'));
}


    public function store(Request $request)
    {
        $request->validate([
            'question' => 'required',
            'option_a' => 'required',
            'option_b' => 'required',
            'option_c' => 'required',
            'option_d' => 'required',
            'correct_ans' => 'required',
            'category_id' => 'required',
            'quiz_id' => 'required',
        ]);

        Mcq::create($request->all());

        return redirect()->route('mcqs.index')->with('success', 'MCQ added successfully.');
    }

    public function edit($id)
    {
        $mcq = Mcq::findOrFail($id);
        $categories = Category::all();
        $quizzes = Quiz::all();
        return view('mcqs.edit', compact('mcq', 'categories', 'quizzes'));
    }

    public function update(Request $request, $id)
    {
        $mcq = Mcq::findOrFail($id);
        $mcq->update($request->all());

        return redirect()->route('mcqs.index')->with('success', 'MCQ updated successfully.');
    }

    public function destroy($id)
    {
        $mcq = Mcq::findOrFail($id);
        $mcq->delete();

        return redirect()->route('mcqs.index')->with('success', 'MCQ deleted successfully.');
    }
}
