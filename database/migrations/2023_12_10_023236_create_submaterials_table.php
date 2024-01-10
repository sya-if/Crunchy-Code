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
        Schema::create('submaterials', function (Blueprint $table) {
            $table->id();
            $table->string('subchapternumber')->nullable();
            $table->string('subchaptertitle')->nullable();
            $table->string('status')->nullable()->default('0');
            $table->bigInteger('modulenumber')->unsigned();
            $table->foreign('modulenumber')->references('modulenumber')->on('materials')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::table('submaterials', function (Blueprint $table) {
            $table->dropForeign(['modulenumber']);
        });

        Schema::dropIfExists('submaterials');
    }
};
