<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forum_posts', function (Blueprint $table) {
            $table->id();

            // Foreign Key. Relationship between table Forum Post and table Forum. Name depan kena sama dengan model
            $table->bigInteger('forum_id')->unsigned();
            $table->foreign('forum_id')->references('id')->on('forums')->onDelete('cascade');

            $table->string('title')->nullable();

            // Photo variable
            $table->string('photo')->nullable();

            // Foreign Key. Relationship between table Forum Post and table Forum. Name depan kena sama dengan model
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            ;

            $table->text('desciption');
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
        Schema::table('forum_posts', function (Blueprint $table) {
            $table->dropForeign(['forum_id']);
            $table->dropForeign(['user_id']);
        });

        Schema::dropIfExists('forum_posts');

    }
};
