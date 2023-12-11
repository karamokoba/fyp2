<?php

// app/Models/ChartQuestion.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChartQuestion extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'instruction', 'image', 'marks'];
}
