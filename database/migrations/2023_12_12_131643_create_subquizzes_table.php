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
            $table->string('subchapternumber')->nullable();
            $table->string('subchaptertitle')->nullable();
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
