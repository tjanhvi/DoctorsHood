<?php

namespace App\Http\Controllers;

use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Specialisation;
use App\Models\Symptom;
use App\Models\MedicineReminder;
use App\Models\Prescription;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('register', 'login', 'homepage', 'ourTeam');
    }

    protected function getDoctorDetails($doctors){
        $id_arr = array();
        $name_arr = array();
        $phone_arr = array();
        $email_arr = array();
        $gender_arr = array();
        $age_arr = array();
        $photo_arr = array();
        $year_of_experience_arr = array();
        $qualifications_arr = array();
        $specialisation_arr = array();
        $disease_expertise_arr = array();
        $city_arr = array();
        $state_arr = array();
        $appointment_type_arr = array();
        $clinic_title_arr = array();
        $clinic_address_arr = array();
        $time_slots_arr = array();
        $days_slots_arr = array();
        $online_arr = array();
        $onsite_arr = array();

        foreach ($doctors as $d) {
            array_push($id_arr, $d->id);
            array_push($name_arr, $d->name);
            array_push($phone_arr, $d->phone);
            array_push($email_arr, $d->email);
            array_push($gender_arr, $d->gender);
            array_push($age_arr, $d->age);
            array_push($photo_arr, $d->photo_url);
            array_push($year_of_experience_arr, $d->year_experience);
            array_push($qualifications_arr, $d->qualifications);
            array_push($specialisation_arr, $d->specialisation);
            array_push($disease_expertise_arr, $d->disease_expertise);
            array_push($city_arr, $d->city);
            array_push($state_arr, $d->state);
            array_push($appointment_type_arr, $d->appointment_type);
            array_push($clinic_title_arr, $d->clinic_title);
            array_push($clinic_address_arr, $d->clinic_address);
            array_push($time_slots_arr, $d->time_slots);
            array_push($days_slots_arr, $d->days_slots);
            if ($d->appointment_type == 'online'){
                array_push($online_arr, 1);
                array_push($onsite_arr, 0);
            }else if ($d->appointment_type == 'offline'){
                array_push($online_arr, 0);
                array_push($onsite_arr, 1);
            }else if ($d->appointment_type == 'both'){
                array_push($online_arr, 1);
                array_push($onsite_arr, 1);
            }
        }

        return array(
            $id_arr,
            $name_arr,
            $phone_arr,
            $email_arr,
            $gender_arr,
            $age_arr,
            $photo_arr,
            $year_of_experience_arr,
            $qualifications_arr,
            $specialisation_arr,
            $disease_expertise_arr,
            $city_arr,
            $state_arr,
            $appointment_type_arr,
            $clinic_title_arr,
            $clinic_address_arr,
            $time_slots_arr,
            $days_slots_arr,
            $online_arr,
            $onsite_arr
        );
    }
    
    public function register(){
        return view('user.auth.register', ['pageTitle' => 'Register']);
    }

    public function login(){
        return view('user.auth.login', ['pageTitle' => 'Login']);
    }

    protected function isLogged(){
        if (auth()->user() !== null){
            return array(true, auth()->user()->role);
        }else {
            return array(false);
        }
    }
    
    public function homepage(){
        $isLoggedArr = $this->isLogged();
        $role = null;
        if ($isLoggedArr[0] === true){
            $role = $isLoggedArr[1];
        }
        return view('user.homepage', [
            'pageTitle' => 'Home',
            'role' => $role
        ]);
    }

    public function onlineAppointment($doctorId){
        $getDoctor = Doctor::where('id', $doctorId)->get();
        $doctor = $getDoctor[0];

        $today = Carbon::now('Asia/Kolkata');
        $getAppointments = Appointment::where('doctor_id', $doctor->id)->where('date', $today->toDateString())->get();

        return view('user.onlineAppointment', [
            'pageTitle' => 'Online Appointments',
            'doctor' => $doctor,
            'appointments' => $getAppointments
        ]);
    }

    public function offlineAppointment($doctorId){
        $getDoctor = Doctor::where('id', $doctorId)->get();
        $doctor = $getDoctor[0];

        $today = Carbon::now('Asia/Kolkata');
        $getAppointments = Appointment::where('doctor_id', $doctor->id)->where('date', $today->toDateString())->get();

        return view('user.offlineAppointment', [
            'pageTitle' => 'Onsite Appointments',
            'doctor' => $doctor,
            'appointments' => $getAppointments
        ]);
    }

    public function onlineCheckSlots(Request $request){
        $getAppointments = Appointment::where('doctor_id', $request->docId)->where('date', $request->date)->get();
        return $getAppointments;
    }

    public function initiateBookAppointment(Request $request){
        $auth_user_phone = auth()->user()->phone;
        $get_patient = Patient::where('phone', $auth_user_phone)->get();

        $appointment = new Appointment;
        $appointment->patient_id = $get_patient[0]->id;
        $appointment->doctor_id = $request->docId;
        $appointment->appointment_type = $request->appointment;
        $appointment->date = $request->date;
        $appointment->time = date("H:i:s", strtotime($request->time));

        $appointment->save();

        return "/user/booking-success";
    }

    public function selectSpecialisation(){
        $specialisations = Specialisation::all();
        $id_arr = array();
        $specialisation_arr = array();

        foreach ($specialisations as $specialisation) {
            array_push($id_arr, $specialisation->id);
            array_push($specialisation_arr, $specialisation->specialisation);
        }

        return view('user.specialisation', [
            'pageTitle' => 'Select Specialisation',
            'id_arr' => $id_arr,
            'specialisation_arr' => $specialisation_arr,
        ]);
    }

    public function selectSymptom(){
        $symptoms = Symptom::all();
        $id_arr = array();
        $symptoms_arr = array();

        foreach ($symptoms as $symptom) {
            array_push($id_arr, $symptom->id);
            array_push($symptoms_arr, $symptom->symptom);
        }

        return view('user.symptom', [
            'pageTitle' => 'Select Symptom',
            'id_arr' => $id_arr,
            'symptoms_arr' => $symptoms_arr,
        ]);
    }

    public function selectDoctor($filter){
        $doctors = Doctor::where('specialisation', $filter)
                        ->orWhere('disease_expertise', $filter)
                        ->get();
        
        $doctors_arr = $this->getDoctorDetails($doctors);

        return view('user.selectDoctor', [
            'pageTitle' => 'Select Doctor',
            'filter' => $filter,
            'id_arr' => $doctors_arr[0],
            'name_arr' => $doctors_arr[1],
            'phone_arr' => $doctors_arr[2],
            'email_arr' => $doctors_arr[3],
            'gender_arr' => $doctors_arr[4],
            'age_arr' => $doctors_arr[5],
            'photo_arr' => $doctors_arr[6],
            'year_of_experience_arr' => $doctors_arr[7],
            'qualifications_arr' => $doctors_arr[8],
            'specialisation_arr' => $doctors_arr[9],
            'disease_expertise_arr' => $doctors_arr[10],
            'city_arr' => $doctors_arr[11],
            'state_arr' => $doctors_arr[12],
            'appointment_type_arr' => $doctors_arr[13],
            'clinic_title_arr' => $doctors_arr[14],
            'clinic_address_arr' => $doctors_arr[15],
            'time_slots_arr' => $doctors_arr[16],
            'days_slots_arr' => $doctors_arr[17],
            'online_arr' => $doctors_arr[18],
            'onsite_arr' => $doctors_arr[19]
        ]);
    }

    public function bookingStatus(){
        return view('user.bookingSuccess', ['pageTitle' => 'Booking Status']);
    }

    public function myAppointments(){
        $auth_user_phone = auth()->user()->phone;
        $patient = Patient::where('phone', $auth_user_phone)->get();

        $appointments = Appointment::where('patient_id', $patient[0]->id)->get();
        $appointment_id_arr = array();
        $app_patient_id_arr = array();
        $app_doctor_id_arr = array();
        $appointment_type_arr =  array();
        $status_arr = array();
        $meeting_link_arr = array();
        $date_arr = array();
        $time_arr = array();
        
        foreach ($appointments as $appointment) {
            array_push($appointment_id_arr, $appointment->id);
            array_push($app_patient_id_arr, $appointment->patient_id);
            array_push($app_doctor_id_arr, $appointment->doctor_id);
            array_push($appointment_type_arr, $appointment->appointment_type);
            array_push($status_arr, $appointment->status);
            array_push($meeting_link_arr, $appointment->meeting_link);
            array_push($date_arr, $appointment->date);
            array_push($time_arr, $appointment->time);
        }

        return view('user.appointments', [
            'pageTitle' => 'My Appointments',
            'appointment_id_arr' => $appointment_id_arr,
            'app_patient_id_arr' => $app_patient_id_arr,
            'app_doctor_id_arr' => $app_doctor_id_arr,
            'appointment_type_arr' => $appointment_type_arr,
            'status_arr' => $status_arr,
            'meeting_link_arr' => $meeting_link_arr,
            'date_arr' => $date_arr,
            'time_arr' => $time_arr
        ]);
    }

    public function createProfile(){
        $auth_user_phone = auth()->user()->phone;
        $patient = Patient::where('phone', $auth_user_phone)->first();
        return view('user.setupUserProfile', [
            'pageTitle' => 'Create Your Profile',
            'patient' => $patient
        ]);
    }

    public function setProfile(Request $request){
        $name = $request->name;
        $gender = $request->gender;
        $age = $request->age;
        $bloodGroup = $request->bloodGroup;
        $height =$request->height;
        $weight = $request->weight;
        $state = $request -> state;
        $city = $request -> city;
        $address = $request -> address;
        
        DB::table('patients')
            ->where('phone', auth()->user()->phone)
            ->update([
                'name' => $name,
                'gender' => $gender,
                'age' => $age,
                'city' => $city,
                'state' => $state,
                'blood_group' => $bloodGroup,
                'height_cm' => $height,
                'weight_kg' => $weight,
                'address' => $address
            ]);
        return "/homepage";
    }

    public function medicineReminder(){
        $auth_user_phone = auth()->user()->phone;
        $patient = Patient::where('phone', $auth_user_phone)->get();

        $medicine_reminders = DB::select('SELECT * FROM medicine_reminders WHERE patient_id = ?', [$patient[0]->id]);
        $pageTitle = 'Medicine Reminder';
        $id_arr = array();
        $name_arr = array();
        $dosage_arr =  array();
        $type_arr = array();
        $instruction_arr =  array();
        $frequency_arr = array();
        $time_arr = array();
        $day_arr =  array();
        $status_arr =  array();

        foreach ($medicine_reminders as $medicine_reminder) {
            array_push($id_arr, $medicine_reminder->patient_id);
            array_push($name_arr, $medicine_reminder->medicine_name);
            array_push($dosage_arr, $medicine_reminder->dosage);
            array_push($type_arr, $medicine_reminder->medication_type);
            array_push($instruction_arr, $medicine_reminder->instructions);
            array_push($frequency_arr, $medicine_reminder->frequency);
            array_push($time_arr, $medicine_reminder->time);
            array_push($day_arr, $medicine_reminder->days);
            array_push($status_arr, $medicine_reminder->status);
        }

        return view('user.medicineReminder', [
            'pageTitle' => $pageTitle,
            'id_arr' => $id_arr,
            'name_arr' => $name_arr,
            'dosage_arr' => $dosage_arr,
            'type_arr' => $type_arr,
            'instruction_arr' => $instruction_arr,
            'frequency_arr' => $frequency_arr,
            'time_arr' => $time_arr,
            'day_arr' => $day_arr,
            'status_arr' => $status_arr,
        ]);
    }

    public function addMedicine(){
        return view('user.addMedicine', ['pageTitle' => 'Add reminder']);
    }

    public function uploadMedicine(Request $request){
        $auth_user_phone = auth()->user()->phone;
        $patient = Patient::where('phone', $auth_user_phone)->get();

        $medicine = new MedicineReminder();
        $medicine->patient_id = $patient[0]->id;
        $medicine->medicine_name = $request->medicine_name;
        $medicine->dosage = $request->dosage;
        $medicine->medication_type = $request->medication_type;
        $medicine->instructions = $request->instructions;
        $medicine->frequency = $request->frequency;
        $medicine->time = $request->time;
        $medicine->days = $request->days;
        $medicine->status = $request->status;
        $medicine->save();
        
        return "/user/medicine-reminder";
    }

    public function getDoctorData(Request $request){
        $doctor = Doctor::where('id', $request->id)->get();
        return $doctor;
    }

    public function getPrescribeData(Request $request){
        $prescription = Prescription::where('appointment_id', $request->id)->get();
        return $prescription;
    }

    public function ourTeam(){
        $isLoggedArr = $this->isLogged();
        $role = null;
        if ($isLoggedArr[0] === true){
            $role = $isLoggedArr[1];
        }
        return view('ourTeam', [
            'pageTitle' => 'Team',
            'role' => $role
        ]);
    }

    public function prescriptionPage(Request $request){
        $prescriptions = Prescription::where('appointment_id', $request->id)->get();
        $doctor = Doctor::where('id', $prescriptions[0]->doctor_id)->get();
        $appointment = Appointment::where('id', $prescriptions[0]->appointment_id)->get();

        return view('user.prescriptionPage', [
            'pageTitle' => 'My Prescriptions',
            'prescriptions' => $prescriptions,
            'doctor' => $doctor,
            'appointment' => $appointment
        ]);
    }

    public function virtualDoctor(){
        $isLoggedArr = $this->isLogged();
        $role = null;
        if ($isLoggedArr[0] === true){
            $role = $isLoggedArr[1];
        }
        return view('user.virtualDoctor', [
            'pageTitle' => 'Virtual Doctor',
            'role' => $role
        ]);
    }
}