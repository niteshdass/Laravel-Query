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
  
    // ! Comment create for check creating an created event
    $comment = Comment::create([
        'user_id' => 1,
        'ratting' => 5,
        'content' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam, quod.'
    ]);

    // dd($rooms);

    return view('welcome');
});
