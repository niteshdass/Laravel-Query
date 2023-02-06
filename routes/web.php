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

    $roomId = 5;

    $rooms = DB::table('reservations')
    ->when($roomId, function ($query, $roomId) {
        return $query->where([['check_in', '=' , '2023-01-03'],['room_id', '>=' ,$roomId]]);
    })
    ->get();
    dd($rooms);

    return view('welcome');
});
