<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone')->unique();
            $table->string('email')->unique();
            $table->string('gender')->nullable();
            $table->integer('age')->nullable();
            $table->string('photo_url')->nullable();
            $table->integer('year_experience')->nullable();
            $table->string('qualifications')->nullable();
            $table->string('specialisation')->nullable();
            $table->string('disease_expertise')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('appointment_type')->nullable();
            $table->string('clinic_title')->nullable();
            $table->string('clinic_address')->nullable();
            $table->string('time_slots')->nullable();
            $table->string('days_slots')->nullable();
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
        Schema::dropIfExists('doctors');
    }
}
