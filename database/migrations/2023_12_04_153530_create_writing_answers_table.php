<?php

// database/migrations/YYYY_MM_DD_create_writing_answers_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWritingAnswersTable extends Migration
{
    public function up()
    {
        Schema::create('writing_answers', function (Blueprint $table) {
            $table->id();
            $table->text('answers');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('writing_answers');
    }
}
