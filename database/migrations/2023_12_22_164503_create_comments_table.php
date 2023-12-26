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
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();

            // Photo variable
            $table->string('photo')->nullable();

            // Foreign Key. Relationship between table Forum Comment and table Post. Name depan kena sama dengan model
            $table->bigInteger('post_id')->unsigned();
            $table->foreign('post_id')->references('id')->on('users')->onDelete('cascade');

            // Foreign Key. Relationship between table Forum Comment and table Forum. Name depan kena sama dengan model
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            

            $table->text('description');
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
        Schema::table('comments', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropForeign(['post_id']);
        });

        Schema::dropIfExists('comments');
    }
};
