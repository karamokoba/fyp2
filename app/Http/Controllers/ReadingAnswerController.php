<?php

// app/Http/Controllers/ReadingAnswerController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ReadingAnswer;
use App\Models\ReadingQuestion;

class ReadingAnswerController extends Controller
{
    public function storeAnswer(Request $request)
    {
        $request->validate([
            'answers' => 'required|string',
        ]);

        ReadingAnswer::create([
            'answers' => $request->input('answers'),
        ]);

        return redirect()->route('readingA.showAll')
            ->with('success', 'Answer submitted successfully!');
    }
}
