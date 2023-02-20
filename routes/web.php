<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Comment;
use App\Company;
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
    $rooms = Company::find(2)->reservations;

dd($rooms->toArray());

    // foreach ($rooms as $room) {
    //     echo $room['comments'] . '<br>';
    // }

    return view('welcome');
});
