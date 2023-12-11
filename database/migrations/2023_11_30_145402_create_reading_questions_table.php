<?php

// database/migrations/xxxx_xx_xx_create_reading_questions_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReadingQuestionsTable extends Migration
{
    public function up()
    {
        Schema::create('reading_questions', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('file'); 
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('reading_questions');
    }
}

