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
        Schema::create('progress', function (Blueprint $table) {
            $table->id();

            // Foreign Key. Relationship between table Submodule and table Progress. 
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            
            // Foreign Key. Relationship between table Submodule and table Progress. 
            $table->bigInteger('submaterial_id')->unsigned();
            $table->foreign('submaterial_id')->references('id')->on('submaterials')->onDelete('cascade');

            $table->string('status')->nullable;

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
        Schema::dropIfExists('progress');
    }
};
