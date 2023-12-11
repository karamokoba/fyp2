<?php

// app/Http/Controllers/DocumentController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\WritingAnswer;
use App\Question;

class WritingAnswerController extends Controller
{
    public function showQuestions()
    {
        $questions = Question::all();
        return view('writingA', compact('questions'));
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

        return redirect()->route('lecturerWritingQ.writingA')
            ->with('success', 'Answer submitted successfully!');
    }
}


