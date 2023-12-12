<?php

// app/Models/ExamResult.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExamResult extends Model
{
    use HasFactory;

    protected $fillable = [
        'writing_mark',
        'writing_comment',
        'reading_mark',
        'reading_comment',
        'graph_mark',
        'graph_comment',
    ];
}
