<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Comment;
use App\Reservation;

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
  
    //! If you want to use soft delete, you must use soft delete trait in model and add deleted_at column in migration table
    // $rooms = Comment::where('ratting', '>', 4)->delete();

    // Force delete method allowed to permanently delete data
    $rooms = Comment::where('ratting', '>', 4)->forceDelete();

    // Restore method allowed to restore data
    // $rooms = Comment::withTrashed()->restore();

    // Get data with trashed data
    // $rooms = Comment::withTrashed()->get();

    // Get data with only trashed data
    // $rooms = Comment::onlyTrashed()->get();

    // get data after delete
    // $rooms = Comment::get();

    dd($rooms);

    return view('welcome');
});
