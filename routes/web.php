<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\ReadingQuestionController;
use App\Http\Controllers\ChartQuestionController;
// use App\Http\Controllers\WritingAnswerController;


Route::get('/', [AuthController::class, 'showLoginForm']);
Route::post('/login', [AuthController::class, 'login']);

Route::get('/lecturerWritingQ/form', [DocumentController::class, 'createForm'])->name('lecturerWritingQ.form');
Route::post('/lecturerWritingQ/storeQuestion', [DocumentController::class, 'storeQuestion']);

Route::get('/lecturerReadingQ/create', [ReadingQuestionController::class, 'create'])->name('lecturerReadingQ/create');
Route::post('/lecturerReadingQ/store', [ReadingQuestionController::class, 'store'])->name('lecturerReadingQ/store');

Route::get('/readingA/showAll', [ReadingQuestionController::class, 'showAll'])->name('readingA.showAll');
Route::get('/readingA/download/{filename}', [ReadingQuestionController::class, 'download'])->name('readingA/download');
Route::post('/readingA/submitAnswer', [ReadingQuestionController::class, 'submitAnswer'])->name('readingA.submitAnswer');

Route::get('/lecturerBarQ/form', [ChartQuestionController::class, 'form'])->name('lecturerBarQ/form');
Route::post('/lecturerBarQ/store', [ChartQuestionController::class, 'store'])->name('lecturerBarQ.store');

Route::get('/writingA', [DocumentController::class, 'showQuestions'])->name('lecturerWritingQ.writingA');

// Route::get('/writingA', [DocumentController::class, 'showQuestions'])->name('lecturerWritingQ.writingA');
Route::post('/writingA', [DocumentController::class, 'storeAnswer'])->name('writingA.store');

Route::get('/graphAnswers', [ChartQuestionController::class, 'showQuestions'])->name('lecturerBarQ.graphAnswers');
Route::get('/lecturerBarQ/download/{filename}', [ChartQuestionController::class, 'download'])->name('lecturerBarQ.download');
Route::post('/graphAnswers/submitAnswer', [ChartQuestionController::class, 'submitAnswer'])->name('graphAnswers.submitAnswer');

Route::get('/categories', function () {
    return view('Categories');
});

Route::get('/lecturerCategories', function () {
    return view('lecturerCategories');
});

Route::get('/instration', function () {
    return view('instration');
});

Route::get('/examCategories', function () {
    return view('examCategories');
});

Route::get('/writingQ', function () {
    return view('writingQ');
});

Route::get('/readingPaper', function () {
    return view('readingPaper');
});

Route::get('/readingQ', function () {
    return view('readingQ');
});

Route::get('/graphInstration', function () {
    return view('graphInstration');
});

Route::get('/lineGraph', function () {
    return view('lineGraph');
});

Route::get('/pieChart', function () {
    return view('pieChart');
});

Route::get('/barChart', function () {
    return view('barChart');
});

Route::get('/logout', function () {
    return view('logout');
});

Route::get('/result', function () {
    return view('result');
});

Route::get('/resultLecturer', function () {
    return view('resultLecturer');
});

Route::get('/login', function () {
    return view('login');
});

