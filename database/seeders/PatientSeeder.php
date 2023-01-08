<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "Test 1",
            'phone' => "7264523485",
            'email' => "test1@gmail.com",
            'password' => Hash::make('secret1234'),
            'role' => "patient",
        ]);
        DB::table('patients')->insert([
            'name' => "Test 1",
            'phone' => "7264523485",
            'email' => "test1@gmail.com",
            'gender' => "male",
            'age' => 30,
            'city' => "Test City",
            'state' => "Test State",
            'blood_group' => "AB+",
            'height_cm' => 130,
            'weight_kg' => 52,
            'Address' => "Test Address",
        ]);

        DB::table('users')->insert([
            'name' => "Test 2",
            'phone' => "8235467824",
            'email' => "test2@gmail.com",
            'password' => Hash::make('secret1234'),
            'role' => "patient",
        ]);
        DB::table('patients')->insert([
            'name' => "Test 2",
            'phone' => "8235467824",
            'email' => "test2@gmail.com",
            'gender' => "female",
            'age' => 27,
            'city' => "Test City 2",
            'state' => "Test State 2",
            'blood_group' => "O-",
            'height_cm' => 185,
            'weight_kg' => 61,
            'Address' => "Test Address 2",
        ]);
    }
}
