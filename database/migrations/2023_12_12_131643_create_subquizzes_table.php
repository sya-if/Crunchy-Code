<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subquizzes', function (Blueprint $table) {
            $table->id();
            $table->text('question_text')->nullable();
            $table->string('answer_1')->nullable();
            $table->string('answer_2')->nullable();
            $table->string('answer_3')->nullable();
            $table->string('answer_4')->nullable();
            $table->string('answer')->nullable();
            $table->bigInteger('chapternumber')->unsigned();
            $table->foreign('chapternumber')->references('chapternumber')->on('quizzes')->onUpdate('cascade')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('subquizzes', function (Blueprint $table) {
            $table->dropForeign(['chapternumber']);
        });

        Schema::dropIfExists('subquizzes');
    }
};
