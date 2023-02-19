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

    $rooms = DB::table('users')->whereJsonContains('meta->skills', 'Laravel')->get();
    $rooms = DB::table('users')->where('meta->skills', 'Laravel')->get();
    dd($rooms);

    return view('welcome');
});
