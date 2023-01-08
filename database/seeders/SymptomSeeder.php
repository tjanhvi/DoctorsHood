<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SymptomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('symptoms')->insert([
            'symptom' => "Back Pain",
        ]);
        DB::table('symptoms')->insert([
            'symptom' => "Fatigue",
        ]);
        DB::table('symptoms')->insert([
            'symptom' => "Cough",
        ]);
        DB::table('symptoms')->insert([
            'symptom' => "Itching",
        ]);
        DB::table('symptoms')->insert([
            'symptom' => "Constipation",
        ]);
        DB::table('symptoms')->insert([
            'symptom' => "Fever",
        ]);
    }
}
