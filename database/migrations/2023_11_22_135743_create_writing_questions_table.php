<?php

// database/migrations/xxxx_xx_xx_create_writing_questions_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWritingQuestionsTable extends Migration
{
    public function up()
    {
        Schema::create('writing_questions', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('question', 1000); 
            $table->integer('marks'); 
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('writing_questions');
    }
}
