<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WritingQuestion extends Model
{
    protected $fillable = ['title', 'question', 'marks'];
}
