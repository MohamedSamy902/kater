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
        Schema::create('healthcare_detalis', function (Blueprint $table) {
            $table->increments('id');
            $table->text('title');
            $table->unsignedInteger('healthcares_id');
            $table->foreign('healthcares_id')->references('id')->on('healthcares')->onDelete('cascade');
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
        Schema::dropIfExists('healthcare_detalis');
    }
};
