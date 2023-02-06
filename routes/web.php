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

    $sortBy = null;

    $rooms = DB::table('reservations')
    //! This method will be called only if $sortBy is not null

    ->when($sortBy, function ($query, $sortBy) {
        return $query->orderBy($sortBy);
    }, function ($query) {
        //! This method will be called only if $sortBy is null

        return $query->orderBy('user_id', 'desc');
    })
    ->get();
    dd($rooms);

    return view('welcome');
});
