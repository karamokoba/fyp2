<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WritingQuestion;
use App\Models\WritingAnswer;

class DocumentController extends Controller
{
    public function createForm()
    {
        return view('lecturerWritingQ');
    }

    public function storeQuestion(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'question' => 'required|max:1000',
            'marks' => 'required|integer',
        ]);

        $title = $request->input('title');
        $question = $request->input('question');
        $marks = $request->input('marks');

        WritingQuestion::create([
            'title' => $title,
            'question' => $question,
            'marks' => $marks,
        ]);

        return redirect()->route('lecturerWritingQ.form')->with('success', 'Writing question added successfully!');
    }

    public function showQuestions()
    {
        $questions = WritingQuestion::all();

        return view('writingA', ['questions' => $questions]);
    }

    public function storeAnswer(Request $request)
    {
        $request->validate([
            'answers' => 'required|string',
        ]);

        $answer = new WritingAnswer([
            'answers' => $request->input('answers'),
        ]);

        $answer->save();

        return redirect()->route('lecturerWritingQ.writingA')->with('success', 'Answer submitted successfully!');
    }
}
