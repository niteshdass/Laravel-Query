<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Comment;
use App\Room;
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
  
    // ! CHere we update ratting with 2 and save it. but it will be 3 because of the mutator.
    $rooms = Room::find(1);

dd($rooms);

    // foreach ($rooms as $room) {
    //     echo $room['comments'] . '<br>';
    // }

    return view('welcome');
});
