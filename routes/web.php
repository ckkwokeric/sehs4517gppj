<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ActivitiesServicesController;
use App\Http\Controllers\ElderlyController;
use App\Http\Controllers\YouthController;
use App\Http\Controllers\UserController;


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




// Home route
Route::controller(HomeController::class)->group(function() {
    Route::get('/', 'index')->name('home');
    Route::get('/aboutus', 'about')->name('about');
    Route::get('/contactus', 'contact')->name('contact');
});

// Activities and Services route
Route::controller(ActivitiesServicesController::class)->group(function() {
    Route::get('/newactivities', 'newActivities')->name('newActivities');
    Route::get('/newservervices', 'newServices')->name('newServices');
    Route::get('/newservervices/service1', 'subService1')->name('subService1');
    Route::get('/newservervices/service2', 'subService2')->name('subService2');
    Route::get('/newservervices/service3', 'subService3')->name('subService3');
});

// Youth route
Route::controller(YouthController::class)->group(function() {
    Route::get('/youth1',  'youth1')->name('youth1'); // Youth - Mental Support
    Route::get('/youth1/detail1',  'youth1_sub1')->name('youth1_sub1'); // Youth - Sub Page 1 (youth1-2)
    Route::get('/youth1/detail2',  'youth1_sub2')->name('youth1_sub2'); // Youth - Sub Page 2 (youth1-3)
    Route::get('/youth2',  'youth2')->name('youth2'); // Youth - Support Development Service
    Route::get('/youth3',  'youth3')->name('youth3'); // Youth - Welling for Youths
});

// Elderly route
Route::controller(ElderlyController::class)->group(function() {
    Route::get('/elderlyactivities',  'activities')->name('elderlyactivities'); // Activities for Elderly
    Route::get('/elderlydevelopment',  'developmentService')->name('elderlydevelopment'); // Elderly Development Service
    Route::get('/elderlysupport',  'support')->name('elderlysupport'); // Elderly Support
    Route::get('/elderlywelling',  'welling')->name('elderlywelling'); // Welling for Elderly
});

// Member route
Route::controller(UserController::class)->group(function() {
    Route::get('/login', 'login')->name('login'); // Showing the login page
    Route::get('/registration', 'registration')->name('registration'); // Showing the registration page
    Route::post('/register-user', 'registerUser')->name('registerUser'); // Backend route for registering user
    Route::post('/login-user', 'loginUser')->name('loginUser'); // Backend route for logging in user
    Route::post('/logout-user', 'logoutUser')->name('logoutUser'); // Backend route for logging in user
});



Route::get('/questionnaire', function () {
    return view('pages/questionnaire/questionnaire');
});
Route::get('/score', function () {
    return view('pages/questionnaire/score');
});

// backend notice
Route::get('/record', function () {
    return view('pages/account/record');
});
