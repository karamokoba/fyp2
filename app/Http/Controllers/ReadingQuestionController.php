<?php
// app/Http/Controllers/ReadingQuestionController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ReadingAnswer;
use App\Models\ReadingQuestion;

class ReadingQuestionController extends Controller
{
    public function create()
    {
        return view('lecturerReadingQ'); 
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'file' => 'required|mimes:pdf',
            'marks' => 'integer', 
        ]);

        $file = $request->file('file')->store('pdfs', 'public');

        ReadingQuestion::create([
            'title' => $request->input('title'),
            'file' => $file,
            'marks' => $request->input('marks'), 
        ]);

        return redirect()->route('lecturerReadingQ/create')->with('success', 'Reading question uploaded successfully.');
    }

    public function showAll()
    {
        $questions = ReadingQuestion::all();

        return view('readingA', compact('questions'));
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

        ReadingAnswer::create([
            'answers' => $request->input('answers'),
        ]);

        return redirect()->route('readingA.showAll')->with('success', 'Answer submitted successfully!');
    }

}
