<?php

// database/migrations/[timestamp]_create_exam_results_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExamResultsTable extends Migration
{
    public function up()
    {
        Schema::create('exam_results', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('writing_mark');
            $table->text('writing_comment');
            $table->unsignedBigInteger('reading_mark');
            $table->text('reading_comment');
            $table->unsignedBigInteger('graph_mark');
            $table->text('graph_comment');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('exam_results');
    }
}
