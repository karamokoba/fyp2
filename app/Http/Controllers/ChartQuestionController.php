<?php

// app/Http/Controllers/ChartQuestionController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ChartQuestion;
use App\Models\GraphAnswer;

class ChartQuestionController extends Controller
{
    public function form()
    {
        return view('lecturerBarQ');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'instruction' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg',
            'marks' => 'required|integer', // Add validation for the marks field
        ]);

        $imagePath = $request->file('image')->store('chart_images', 'public');

        ChartQuestion::create([
            'title' => $request->input('title'),
            'instruction' => $request->input('instruction'),
            'image' => $imagePath,
            'marks' => $request->input('marks'),
        ]);

        return redirect()->route('lecturerBarQ/form')->with('success', 'Chart question added successfully.');
    }

    public function showQuestions()
    {
        $questions = ChartQuestion::all();

        return view('graphAnswers', ['questions' => $questions]);
    }

    public function download($filename)
    {
        $filePath = storage_path('app/public/' . $filename);

        return response()->download($filePath, $filename);
    }

    public function submitAnswer(Request $request)
    {
        $request->validate([
            'answers' => 'required|string',
        ]);

        GraphAnswer::create([
            'answers' => $request->input('answers'),
        ]);

        return redirect()->route('lecturerBarQ.graphAnswers')->with('success', 'Answer submitted successfully!');
    }
}
