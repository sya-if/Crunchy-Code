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
        Schema::create('materials', function (Blueprint $table) {
            $table->id();
            $table->string('modulenumber')->nullable();
            $table->string('moduletitle')->nullable();
            $table->string('subchapternumber')->nullable();
            $table->string('subchaptertitle')->nullable();
            $table->string('contenttitle')->nullable();
            $table->text('contentdescription')->nullable();
            $table->string('pagenumber');
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
        Schema::dropIfExists('materials');
    }
};
