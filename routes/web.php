<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\DoctorController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [UserController::class, 'homepage']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/homepage', [UserController::class, 'homepage'])->name('homepage');

Route::get('/our-team', [UserController::class, 'ourTeam']);

Route::get('/user/register', [UserController::class, 'register']);

Route::get('/user/login', [UserController::class, 'login']);

Route::get('/user/online-appointment/{doctorId}', [UserController::class, 'onlineAppointment'])->middleware('is_patient');

Route::get('/user/offline-appointment/{doctorId}', [UserController::class, 'offlineAppointment'])->middleware('is_patient');

Route::post('/user/online-appointment/check-slots', [UserController::class, 'onlineCheckSlots']);

Route::post('/user/appointment/initiate-booking', [UserController::class, 'initiateBookAppointment']);

Route::get('/user/select-specialisation', [UserController::class, 'selectSpecialisation'])->middleware('is_patient');

Route::get('/user/select-symptom', [UserController::class, 'selectSymptom'])->middleware('is_patient');

Route::get('/user/select-doctor/{filter}', [UserController::class, 'selectDoctor'])->middleware('is_patient');

Route::get('/user/booking-success', [UserController::class, 'bookingStatus'])->middleware('is_patient');

Route::get('/user/my-appointments', [UserController::class, 'myAppointments'])->middleware('is_patient');

Route::post('/user/getDoctorData', [UserController::class, 'getDoctorData']);

Route::post('/user/getPrescribeData', [UserController::class, 'getPrescribeData']);

Route::get('/user/create-profile', [UserController::class, 'createProfile'])->middleware('is_patient');

Route::post('/user/set-profile', [UserController::class, 'setProfile']);

Route::get('/user/medicine-reminder', [UserController::class, 'medicineReminder'])->middleware('is_patient');

Route::get('/user/add-medicine', [UserController::class, 'addMedicine'])->middleware('is_patient');

Route::post('/user/upload-medicine', [UserController::class, 'uploadMedicine']);

Route::get('/user/my-prescriptions/{id}', [UserController::class, 'prescriptionPage'])->middleware('is_patient');

Route::get('/user/virtual-doctor', [UserController::class, 'virtualDoctor'])->middleware('is_patient');

Route::get('/doctor/register', [DoctorController::class, 'register']);

Route::get('/doctor/login', [DoctorController::class, 'login']);

Route::get('/doctor/dashboard', [DoctorController::class, 'dashboard'])->middleware('is_doctor');

Route::get('/doctor/create-profile', [DoctorController::class, 'createProfile'])->middleware('is_doctor');

Route::post('/doctor/set-profile', [DoctorController::class, 'setProfile']);

Route::get('/doctor/online-appointment', [DoctorController::class, 'onlineDoctorAppointment'])->middleware('is_doctor');

Route::get('/doctor/offline-appointment', [DoctorController::class, 'offlineDoctorAppointment'])->middleware('is_doctor');

Route::post('/doctor/getPatientData', [DoctorController::class, 'getPatientData']);

Route::get('/doctor/meeting-lobby/{id}', [DoctorController::class, 'meetingLobby'])->middleware('is_doctor');

Route::post('/doctor/feed-meet-link', [DoctorController::class, 'feedMeetLink']);

Route::get('/doctor/create-report/{id}', [DoctorController::class, 'patientReport'])->middleware('is_doctor');

Route::post('/doctor/generate-report', [DoctorController::class, 'generatePatientReport']);

Route::get('/doctor/view-report/{id}', [DoctorController::class, 'viewPatientReport'])->middleware('is_doctor');