<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMedicineRemindersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('medicine_reminders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_id');
            $table->string('medicine_name');
            $table->string('dosage');
            $table->string('medication_type');
            $table->string('instructions')->nullable();
            $table->integer('frequency');
            $table->string('time');
            $table->string('days');
            $table->enum('status', ['upcoming', 'completed'])->default('upcoming');
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
        Schema::dropIfExists('medicine_reminders');
    }
}
