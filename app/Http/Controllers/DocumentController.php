<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WritingQuestion;
use App\Models\WritingAnswer;
use App\Models\GraphAnswer;
use App\Models\ReadingAnswer;
use App\Models\ExamResult;


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

    public function showAnswers()
    {
        $writingAnswer = WritingAnswer::latest()->first();
        $readingAnswer = ReadingAnswer::latest()->first();
        $graphAnswer = GraphAnswer::latest()->first();

        return view('resultLecturer', compact('writingAnswer', 'readingAnswer', 'graphAnswer'));
    }

    public function submitResults(Request $request)
    {
        $request->validate([
            'writing_mark' => 'required|integer',
            'writing_comment' => 'required|string',
            'reading_mark' => 'required|integer',
            'reading_comment' => 'required|string',
            'graph_mark' => 'required|integer',
            'graph_comment' => 'required|string',
        ]);

        ExamResult::create([
            'writing_mark' => $request->input('writing_mark'),
            'writing_comment' => $request->input('writing_comment'),
            'reading_mark' => $request->input('reading_mark'),
            'reading_comment' => $request->input('reading_comment'),
            'graph_mark' => $request->input('graph_mark'),
            'graph_comment' => $request->input('graph_comment'),
        ]);

        return redirect()->back()->with('success', 'Results submitted successfully!');
    }

    public function showResults()
    {
        // Fetch marks from the database
        $examResults = ExamResult::latest()->first();

        return view('result', compact('examResults'));
    }
}
