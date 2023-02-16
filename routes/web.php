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
    // $rooms = Comment::get()->toArray();
    // $rooms = Comment::get()->toJson();
    // $rooms = Comment::get()->count();


    //! Reject method is like filter method but it will return the opposite result
    $comments = Comment::get();
    $rooms = $comments->reject(function ($value, $key) {
        return ($value->user_id < 32 || $value->ratting > 4);
    });

    // get the difference between two collections
    // $rooms = $comments->diff($rooms)->toArray();
    dd($rooms->toArray());

    return view('welcome');
});
