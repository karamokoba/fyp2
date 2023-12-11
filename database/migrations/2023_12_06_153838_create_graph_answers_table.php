<?php

// database/migrations/{timestamp}_create_graph_answers_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGraphAnswersTable extends Migration
{
    public function up()
    {
        Schema::create('graph_answers', function (Blueprint $table) {
            $table->id();
            $table->string('answers');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('graph_answers');
    }
}

