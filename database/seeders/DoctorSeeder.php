<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DoctorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => "Dr. Test 1",
            'phone' => "6524312890",
            'email' => "drtest1@gmail.com",
            'password' => Hash::make('secret1234'),
            'role' => "doctor",
        ]);
        DB::table('doctors')->insert([
            'name' => "Dr. Test 1",
            'phone' => "6524312890",
            'email' => "drtest1@gmail.com",
            'gender' => "male",
            'age' => 40,
            'year_experience' => 12,
            'qualifications' => "MBBS",
            'specialisation' => "Allergist",
            'disease_expertise' => "Itching",
            'city' => "Test City 1",
            'state' => "Test State 1",
            'appointment_type' => "online",
            'time_slots' => "9am-5pm",
            'days_slots' => "Mon-Sat",
        ]);

        DB::table('users')->insert([
            'name' => "Dr. Test 2",
            'phone' => "3546786430",
            'email' => "drtest2@gmail.com",
            'password' => Hash::make('secret1234'),
            'role' => "doctor",
        ]);
        DB::table('doctors')->insert([
            'name' => "Dr. Test 2",
            'phone' => "3546786430",
            'email' => "drtest2@gmail.com",
            'gender' => "female",
            'age' => 35,
            'year_experience' => 8,
            'qualifications' => "MBBS, MD",
            'specialisation' => "Cardiologist",
            'disease_expertise' => "Heart Attack",
            'city' => "Test City 2",
            'state' => "Test State 2",
            'appointment_type' => "both",
            'clinic_title' => "Dr. Test Clinic 2",
            'clinic_address' => "Dr. Test Clinic Address 2",
            'time_slots' => "10am-7pm",
            'days_slots' => "Mon-Fri",
        ]);

        DB::table('users')->insert([
            'name' => "Dr. Test 3",
            'phone' => "4563278654",
            'email' => "drtest3@gmail.com",
            'password' => Hash::make('secret1234'),
            'role' => "doctor",
        ]);
        DB::table('doctors')->insert([
            'name' => "Dr. Test 3",
            'phone' => "4563278654",
            'email' => "drtest3@gmail.com",
            'gender' => "male",
            'age' => 28,
            'year_experience' => 4,
            'qualifications' => "MD(Hons.)",
            'specialisation' => "Neurologist",
            'disease_expertise' => "Brain Fever",
            'city' => "Test City 3",
            'state' => "Test State 3",
            'appointment_type' => "online",
            'time_slots' => "11am-9pm",
            'days_slots' => "All days",
        ]);

        DB::table('users')->insert([
            'name' => "Dr. Test 4",
            'phone' => "2356459078",
            'email' => "drtest4@gmail.com",
            'password' => Hash::make('secret1234'),
            'role' => "doctor",
        ]);
        DB::table('doctors')->insert([
            'name' => "Dr. Test 4",
            'phone' => "2356459078",
            'email' => "drtest4@gmail.com",
            'gender' => "female",
            'age' => 45,
            'year_experience' => 15,
            'qualifications' => "MBBS(Hons.)",
            'specialisation' => "Ophthalmologist",
            'disease_expertise' => "Eye Care",
            'city' => "Test City 4",
            'state' => "Test State 4",
            'appointment_type' => "offline",
            'clinic_title' => "Dr. Test Clinic 4",
            'clinic_address' => "Dr. Test Clinic Address 4",
            'time_slots' => "10am-8pm",
            'days_slots' => "All days",
        ]);

        DB::table('users')->insert([
            'name' => "Dr. Test 5",
            'phone' => "1236457830",
            'email' => "drtest5@gmail.com",
            'password' => Hash::make('secret1234'),
            'role' => "doctor",
        ]);
        DB::table('doctors')->insert([
            'name' => "Dr. Test 5",
            'phone' => "1236457830",
            'email' => "drtest5@gmail.com",
            'gender' => "male",
            'age' => 50,
            'year_experience' => 20,
            'qualifications' => "MBBS, MD(Hons.)",
            'specialisation' => "Child Specialist",
            'disease_expertise' => "Fever",
            'city' => "Test City 5",
            'state' => "Test State 5",
            'appointment_type' => "online",
            'time_slots' => "10am-6pm",
            'days_slots' => "Mon-Sat",
        ]);

        DB::table('users')->insert([
            'name' => "Dr. Test 6",
            'phone' => "2653478658",
            'email' => "drtest6@gmail.com",
            'password' => Hash::make('secret1234'),
            'role' => "doctor",
        ]);
        DB::table('doctors')->insert([
            'name' => "Dr. Test 6",
            'phone' => "2653478658",
            'email' => "drtest6@gmail.com",
            'gender' => "male",
            'age' => 32,
            'year_experience' => 3,
            'qualifications' => "MBBS",
            'specialisation' => "Physiotherapist",
            'disease_expertise' => "Back Pain",
            'city' => "Test City 6",
            'state' => "Test State 6",
            'appointment_type' => "both",
            'clinic_title' => "Dr. Test Clinic 6",
            'clinic_address' => "Dr. Test Clinic Address 6",
            'time_slots' => "11am-8pm",
            'days_slots' => "Mon-Sat",
        ]);

        DB::table('users')->insert([
            'name' => "Dr. Test 7",
            'phone' => "6453786345",
            'email' => "drtest7@gmail.com",
            'password' => Hash::make('secret1234'),
            'role' => "doctor",
        ]);
        DB::table('doctors')->insert([
            'name' => "Dr. Test 7",
            'phone' => "6453786345",
            'email' => "drtest7@gmail.com",
            'gender' => "female",
            'age' => 38,
            'year_experience' => 7,
            'qualifications' => "MBBS(Hons.), MD",
            'specialisation' => "Pulmonologist",
            'disease_expertise' => "Cough",
            'city' => "Test City 7",
            'state' => "Test State 7",
            'appointment_type' => "online",
            'time_slots' => "10am-5pm",
            'days_slots' => "Mon-Fri",
        ]);

        DB::table('users')->insert([
            'name' => "Dr. Test 8",
            'phone' => "2367549807",
            'email' => "drtest8@gmail.com",
            'password' => Hash::make('secret1234'),
            'role' => "doctor",
        ]);
        DB::table('doctors')->insert([
            'name' => "Dr. Test 8",
            'phone' => "2367549807",
            'email' => "drtest8@gmail.com",
            'gender' => "female",
            'age' => 42,
            'year_experience' => 11,
            'qualifications' => "MBBS",
            'specialisation' => "Sleep Specialist",
            'disease_expertise' => "Fatigue",
            'city' => "Test City 8",
            'state' => "Test State 8",
            'appointment_type' => "both",
            'clinic_title' => "Dr. Test Clinic 8",
            'clinic_address' => "Dr. Test Clinic Address 8",
            'time_slots' => "9am-6pm",
            'days_slots' => "Mon-Sat",
        ]);
    }
}
