<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

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

    //! Get rooms and city information that are make a relation with reservations table
    // $rooms = DB::table('reservations')
    // ->join('rooms', 'reservations.room_id', '=', 'rooms.id')
    // ->join('cities', 'reservations.city_id', '=', 'cities.id')
    // ->get();

    $rooms = DB::table('rooms')
    ->leftJoin('reservations', 'rooms.id', '=', 'reservations.room_id')
    ->selectRaw('rooms.room_size, reservations.check_in, count(reservations.id) as total_reservations')
    ->groupBy('room_size', 'check_in')
    ->orderByRaw('count(reservations.id) desc')
    ->get();

    dd($rooms);

    return view('welcome');
});
