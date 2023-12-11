<?php

// database/migrations/xxxx_xx_xx_create_chart_questions_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChartQuestionsTable extends Migration
{
    public function up()
    {
        Schema::create('chart_questions', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('instruction');
            $table->string('image');
            $table->integer('marks');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('chart_questions');
    }
}
