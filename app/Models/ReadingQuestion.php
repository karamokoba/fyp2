<?php

// app/Models/ReadingQuestion.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReadingQuestion extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'file', 'marks'];
}
