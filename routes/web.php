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
    //! It should use for normal step by step pagination
    // $rooms = DB::table('users')->paginate(10);
    //! It should use for infinity loader pagination
    // $rooms = DB::table('users')->simplePaginate(10);
    //! Dynamic pagination
    $rooms = DB::table('users')->paginate($perPage = 10, $columns = ['name'], $pageName = 'user');
    dd($rooms);

    return view('welcome');
});
