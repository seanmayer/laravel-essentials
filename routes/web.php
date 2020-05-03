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
    return view('welcome');
});

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/test',function() {
    $hash = Hash::make('black-saber');
    var_dump($hash);
    var_dump(Hash::check('black-saber', $hash));
    var_dump(Hash::needsRehash($hash));
    $oldHash = Hash::make('black-saber', ['rounds' => 5]);
    var_dump($oldHash);
    var_dump(Hash::needsRehash($oldHash));
    var_dump(Hash::make('black_saber'));
});

Route::get('/rooms', 'ShowRoomsController');

Route::get('/rooms/{roomType?}','ShowRoomsController');

Route::resource('bookings', 'BookingController');

Route::resource('room_types', 'RoomTypeController');
/*
Route::get('/bookings', 'BookingContoller@index');
Route::get('/bookings/create', 'BookingController@create');
Route::post('/bookings', 'BookingController@store');
Route::get('/bookings/{booking}', 'BookingController@show');
Route::get('/bookings/{booking}/edit', 'BookingController@edit');
Route::put('/bookings/{booking}', 'BookingController@update');
Route::delete('/bookings/{booking}', 'BookingController@destroy');
*/