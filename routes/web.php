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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/reservations', 'ReservationController@index')->name('reservation-list');
Route::get('/courts', 'CourtController@index')->name('court-list');

Route::post('/add-court', 'CourtController@addCourt')->name('add-court');
Route::post('/add-reservation', 'ReservationController@addReservation')->name('add-reservation');
