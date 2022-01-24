<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QrCodeGeneratorController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserLogingController;
use App\Http\Controllers\CoachProfileController;
use App\Http\Controllers\TraineeProfileController;
use App\Http\Controllers\ShowTraineeProfileController;
use App\Http\Controllers\ShowCoachProfileController;
use App\Http\Controllers\EditFacilities;
use App\Http\Controllers\BookCoachController;
use App\Http\Controllers\BookFacilitiesController;
use App\Http\Controllers\LoginFacilitiesController;
use App\Http\Controllers\GoogleController;

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
//     //return view('welcome');
//     return view('home');
// });

// Route::get('/', [QrCodeGeneratorController::class, 'index']);

Route::get('/', function () {
    return view('home');
});

Route::get('/login', [CustomAuthController::class, 'login']);
Route::get('/registration', [CustomAuthController::class, 'registration']);
Route::post('/register-user', [CustomAuthController::class, 'registerUser'])->name("register-user");
Route::post('/login-user', [CustomAuthController::class, 'loginUser'])->name("login-user");
Route::get('/dashboard', [CustomAuthController::class, 'dashboard'])->middleware("isLoggedIn");
Route::post('/user_login', [UserLogingController::class, 'userlogin'])->name("user_login");

Route::get('/profile', [TraineeProfileController::class, 'profile']);
Route::post('/trainee_profile', [TraineeProfileController::class, 'setUpProfile'])->name("trainee_profile");
Route::get('/showtraineeprofile', [ShowTraineeProfileController::class, 'show']);

Route::get('/coachprofile', [CoachProfileController::class, 'profile']);
Route::post('/coach_profile', [CoachProfileController::class, 'setUpProfile'])->name("coach_profile");
Route::get('/showcoachprofile', [ShowCoachProfileController::class, 'show']);

Route::get('/editfacilities', [EditFacilities::class, 'edit']);
Route::post('/edit_facilities', [EditFacilities::class, 'addFacilities'])->name("edit_facilities");
Route::get('/facilitiesinfo', [EditFacilities::class, 'show']);
Route::get('/editfacilities/{id}',  [EditFacilities::class, 'editData']);
Route::get('/delete/{id}',  [EditFacilities::class, 'delete']);
Route::get('/deleteID/{id}',  [EditFacilities::class, 'deleteID']);
Route::post('/update_facilities', [EditFacilities::class, 'update'])->name("update_facilities");
Route::get('/addfacilitiesID/{id}',  [EditFacilities::class, 'addFacilitiesID']);
Route::get('/facilitiesID', [EditFacilities::class, 'showID']);
Route::post('/add_facilitiesID', [EditFacilities::class, 'addID'])->name("add_facilitiesID");

Route::get('/bookcoach', [TraineeProfileController::class, 'bookcoach']);
Route::get('/bookcoach/{id}', [TraineeProfileController::class, 'booking']);
Route::get('/bookfacilities', [TraineeProfileController::class, 'bookfacilities']);
Route::get('/bookfacilities/{id}', [TraineeProfileController::class, 'bookingFacilities']);
Route::get('/bookingfacilitiesID/{id}', [TraineeProfileController::class, 'bookingfacilitiesID']);
Route::post('/login_facilities', [LoginFacilitiesController::class, 'loginFacilities'])->name("login_facilities");
Route::get('/login_facilities_schedule', [LoginController::class, 'showLogin']);

Route::post('/book_coach', [BookCoachController::class, 'setUpBookCoach'])->name("book_coach");
Route::get('/appointment', [BookCoachController::class, 'show']);
Route::post('/book_facilities', [BookFacilitiesController::class, 'setUpBookFacilities'])->name("book_facilities");
Route::get('/schedule', [BookFacilitiesController::class, 'show']);

Route::get('qrcode/{id}', [EditFacilities::class, 'generate'])->name('generate');
Route::get('list', [MemberController::class, 'show']);
Route::get('login_list', [LoginController::class, 'show']);
// Route::get('qrcode/{id}', [EditFacilities::class, 'generate'])->name('generate');

Route::get('auth/google', [GoogleController::class, 'redirectToGoogle']);

// Route::post('/', 'UserLoginController@loginUserTime');

// Route::get('/logout', [CustomAuthController::class, 'logout']);

// Route::resource('user_logins', UserLogingController::class);