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
        Schema::create('well_being_detalis', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->unsignedInteger('well_beings_id');
            $table->foreign('well_beings_id')->references('id')->on('well_beings')->onDelete('cascade');
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
        Schema::dropIfExists('well_being_detalis');
    }
};
