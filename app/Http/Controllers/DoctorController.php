<?php

namespace App\Http\Controllers;

use App\Mail\MeetLinkMail;
use App\Models\Appointment;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Prescription;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class DoctorController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('register', 'login');
    }
    
    public function register(){
        return view('doctor.auth.register', ['pageTitle' => 'Doctor Register']);
    }

    public function login(){
        return view('doctor.auth.login', ['pageTitle' => 'Doctor Login']);
    }

    public function createProfile(){
        $auth_user_phone = auth()->user()->phone;
        $doctor = Doctor::where('phone', $auth_user_phone)->first();

        return view('doctor.setupDoctorProfile', [
            'pageTitle' => 'Create Your Profile',
            'doctor' => $doctor
        ]);
    }

    public function setProfile(Request $request){
        $name = $request->name;
        $gender = $request->gender;
        $age = $request->age;
        $qualification = $request->qualification;
        $specialisation = $request->specialisation;
        $disease_expertise = $request->disease_expertise;
        $experience = $request->experience;
        $city = $request->city;
        $state = $request->state;
        $appointment_type = $request->appointment_type;
        $clinic_title = $request->clinic_title;
        $clinic_address = $request->clinic_address;
        $time_slots = $request->time_slots;
        $days_slots = $request->days_slots;

        DB::table('doctors')
            ->where('phone', auth()->user()->phone)
            ->update([
                'name' => $name,
                'gender' => $gender,
                'age' => $age,
                'qualifications' => $qualification,
                'specialisation' => $specialisation,
                'disease_expertise' => $disease_expertise,
                'year_experience' => $experience,
                'city' => $city,
                'state' => $state,
                'appointment_type' => $appointment_type,
                'clinic_title' => $clinic_title,
                'clinic_address' => $clinic_address,
                'time_slots' => $time_slots,
                'days_slots' => $days_slots
            ]);
        return "/doctor/dashboard";
    }

    public function dashboard(){
        return view('doctor.dashboard', ['pageTitle' => 'Dashboard']);
    }

    public function onlineDoctorAppointment(){
        $doctor = Doctor::where('phone', auth()->user()->phone)->get();
        $today = Carbon::now('Asia/Kolkata');
        
        $upcoming_appointments = Appointment::
                                where([
                                    ['doctor_id', $doctor[0]->id],
                                    ['appointment_type', 'online'],
                                    ['status', 'upcoming'],
                                    ['date', '>', $today->toDateString()]
                                ])->orWhere([
                                    ['doctor_id', $doctor[0]->id],
                                    ['appointment_type', 'online'],
                                    ['status', 'upcoming'],
                                    ['date', '=', $today->toDateString()],
                                    ['time', '>=', $today->format('H:i:m')]
                                ])->get();

        $completed_appointments = Appointment::
                                where([
                                    ['doctor_id', $doctor[0]->id],
                                    ['appointment_type', 'online'],
                                    ['status', 'completed']
                                ])->orWhere([
                                    ['doctor_id', $doctor[0]->id],
                                    ['appointment_type', 'online'],
                                    ['status', 'upcoming'],
                                    ['date', '<', $today->toDateString()]
                                ])->orWhere([
                                    ['doctor_id', $doctor[0]->id],
                                    ['appointment_type', 'online'],
                                    ['status', 'upcoming'],
                                    ['date', '=', $today->toDateString()],
                                    ['time', '<', $today->format('H:i:m')]
                                ])->get();

        return view('doctor.onlineDoctorAppointment', [
            'pageTitle' => 'Online Appointment',
            'upcoming_appointments' => $upcoming_appointments,
            'completed_appointments' => $completed_appointments,
        ]);
    }

    public function offlineDoctorAppointment(){
        $doctor = Doctor::where('phone', auth()->user()->phone)->get();
        $today = Carbon::now('Asia/Kolkata');

        $upcoming_appointments = Appointment::
                                where([
                                    ['doctor_id', $doctor[0]->id],
                                    ['appointment_type', 'offline'],
                                    ['status', 'upcoming'],
                                    ['date', '>', $today->toDateString()]
                                ])->orWhere([
                                    ['doctor_id', $doctor[0]->id],
                                    ['appointment_type', 'offline'],
                                    ['status', 'upcoming'],
                                    ['date', '=', $today->toDateString()],
                                    ['time', '>=', $today->format('H:i:m')]
                                ])->get();
        
        $completed_appointments = Appointment::
                                where([
                                    ['doctor_id', $doctor[0]->id],
                                    ['appointment_type', 'offline'],
                                    ['status', 'completed']
                                ])->orWhere([
                                    ['doctor_id', $doctor[0]->id],
                                    ['appointment_type', 'offline'],
                                    ['status', 'upcoming'],
                                    ['date', '<', $today->toDateString()]
                                ])->orWhere([
                                    ['doctor_id', $doctor[0]->id],
                                    ['appointment_type', 'offline'],
                                    ['status', 'upcoming'],
                                    ['date', '=', $today->toDateString()],
                                    ['time', '<', $today->format('H:i:m')]
                                ])->get();

        return view('doctor.offlineDoctorAppointment', [
            'pageTitle' => 'Offline Appointment',
            'upcoming_appointments' => $upcoming_appointments,
            'completed_appointments' => $completed_appointments,
        ]);
    }

    public function getPatientData(Request $request){
        $patient_info = Patient::where('id', $request->patient_id)->get();
        $patient_name = $patient_info[0]->name;
        return $patient_name;
    }

    public function meetingLobby(Request $request){
        $app_info = Appointment::where('id', $request->id)->get();
        $patient_id = $app_info[0]->patient_id;
        
        $patient_info = Patient::where('id', $patient_id)->get();
        $patient_email = $patient_info[0]->email;

        return view('doctor.meetingLobby', [
            'pageTitle' => 'Meeting Lobby',
            'id' => $request->id,
            'patient_email' => $patient_email
        ]);
    }

    public function feedMeetLink(Request $request){
        DB::table('appointments')->where('id', $request->app_id)->update(['meeting_link' => $request->meet_link]);
        $appointment = Appointment::findOrFail($request->app_id);
        Mail::to($request->email)->send(new MeetLinkMail($appointment));
        return ("Email has been sent successfully!");
    }

    public function patientReport(Request $request){
        $auth_user_phone = auth()->user()->phone;
        $app_id = $request->id;

        $doctor = Doctor::where('phone', $auth_user_phone)->get();
        $appointment = Appointment::where('id', $app_id)->get();
        $patient = Patient::where('id', $appointment[0]->patient_id)->get();

        return view('doctor.patientReport', [
            'pageTitle' => 'Patient Report',
            'doctor' => $doctor,
            'patient' => $patient,
            'appId' => $app_id
        ]);
    }

    public function generatePatientReport(Request $request){
        $app_id = $request->appointmentId;
        $patient_id = $request->patientId;
        $doctor_id = $request->doctorId;
        $health_title = $request->healthTitle;
        $diagnosis_details = $request->diagnosisDetails;
        $symptom_details = $request->symptomDetails;
        $prescribed_medicines = $request->prescribedMedicines;
        $instructions = $request->instructions;

        $prescription = new Prescription();
        $prescription->appointment_id = $app_id;
        $prescription->patient_id = $patient_id;
        $prescription->doctor_id = $doctor_id;
        $prescription->health_title = $health_title;
        $prescription->diagnosis_details = $diagnosis_details;
        $prescription->symptom_details = $symptom_details;
        $prescription->prescribed_medicines = $prescribed_medicines;
        $prescription->instructions = $instructions;
        $prescription->save();

        DB::table('appointments')->where('id', $app_id)->update(['status' => "completed"]);

        return "/doctor/dashboard";
    }

    public function viewPatientReport(Request $request){
        $app_id = $request->id;
        $prescription = Prescription::where('appointment_id', $app_id)->get();
        $patient = Patient::where('id', $prescription[0]->patient_id)->get();

        return view('doctor.viewPatientReport', [
            'pageTitle' => 'View Patient Report',
            'prescription' => $prescription,
            'patient' => $patient,
        ]);
    }
}