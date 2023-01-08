<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SpecialisationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('specialisations')->insert([
            'specialisation' => "Allergist",
        ]);
        DB::table('specialisations')->insert([
            'specialisation' => "Cardiologist",
        ]);
        DB::table('specialisations')->insert([
            'specialisation' => "Endocrinologist",
        ]);
        DB::table('specialisations')->insert([
            'specialisation' => "Neurologist",
        ]);
        DB::table('specialisations')->insert([
            'specialisation' => "Ophthalmologist",
        ]);
        DB::table('specialisations')->insert([
            'specialisation' => "Child Specialist",
        ]);
    }
}
