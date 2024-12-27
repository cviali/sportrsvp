<?php

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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('homepage');

Route::get('/badminton', function () {
    return view('badminton');
})->name('badminton');

Route::get('/tennis', function () {
    return view('tennis');
})->name('tennis');

Route::get('/padel', function () {
    return view('padel');
})->name('padel');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/reservations', 'ReservationController@index')->name('reservation-list');
Route::get('/detail/{id}', 'ReservationDetailController@index')->name('reservation-detail');
Route::get('/update-status/{id}/{status_id}', 'ReservationDetailController@updateStatus')->name('update-status');
Route::get('/courts', 'CourtController@index')->name('court-list');

Route::post('/add-court', 'CourtController@addCourt')->name('add-court');
Route::post('/add-reservation', 'ReservationController@addReservation')->name('add-reservation');
