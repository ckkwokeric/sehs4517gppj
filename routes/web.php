<?php

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

Route::get('/', function () {
    return view('pages/home-community');
});


Route::get('/home', function () {
    return view('pages/home-community');
});
Route::get('/aboutus', function () {
    return view('pages/aboutus');
});
Route::get('/activity', function () {
    return view('pages/new/newactivities');
});
Route::get('/services', function () {
    return view('pages/new/newservices');
});
Route::get('/services1', function () {
    return view('pages/new/services1');
});
Route::get('/services2', function () {
    return view('pages/new/services2');
});
Route::get('/services3', function () {
    return view('pages/new/services3');
});

Route::get('youth1.2', function () {
    return view('pages/youths/youth1-2');
});
Route::get('youth1.3', function () {
    return view('pages/youths/youth1-3');
});
Route::get('/youth1', function () {
    return view('pages/youths/youth1');
});
Route::get('/youth2', function () {
    return view('pages/youths/youth2');
});
Route::get('/youth3', function () {
    return view('pages/youths/youth3');
});
Route::get('/questionnaire', function () {
    return view('pages/questionnaire/questionnaire');
});
Route::get('/score', function () {
    return view('pages/questionnaire/score');
});
Route::get('/contactus', function () {
    return view('pages/contactus');
});

// backend notice
Route::get('/login', function () {
    return view('pages/account/login2');
});
Route::get('/registration', function () {
    return view('pages/account/regist');
});
Route::get('/record', function () {
    return view('pages/account/record');
});