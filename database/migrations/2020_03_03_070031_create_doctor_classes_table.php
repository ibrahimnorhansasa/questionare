<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoctorClassesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctor_classes', function (Blueprint $table) {
        $table->bigIncrements('id');
        $table->unsignedBigInteger('class_id');
        $table->foreign('class_id')->references('id')->on('classes')->onDelete('cascade');;
        $table->unsignedBigInteger('doctor_id');
        $table->foreign('doctor_id')->references('id')->on('doctors')->onDelete('cascade');;
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
        Schema::dropIfExists('doctor_classes');
    }
}
