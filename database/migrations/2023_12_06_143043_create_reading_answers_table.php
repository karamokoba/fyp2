<?php

// database/migrations/YYYY_MM_DD_create_reading_answers_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReadingAnswersTable extends Migration
{
    public function up()
    {
        Schema::create('reading_answers', function (Blueprint $table) {
            $table->id();
            $table->text('answers');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('reading_answers');
    }
}
