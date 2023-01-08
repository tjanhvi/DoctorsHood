<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePatientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('phone')->unique();
            $table->string('email')->unique();
            $table->string('gender')->nullable();
            $table->integer('age')->nullable();
            $table->string('photo_url')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('blood_group')->nullable();
            $table->float('height_cm', 8, 2)->nullable();
            $table->float('weight_kg', 8, 2)->nullable();
            $table->string('address')->nullable();
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
        Schema::dropIfExists('patients');
    }
}
