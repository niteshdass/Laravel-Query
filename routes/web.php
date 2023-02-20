<?php

use App\City;
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
  
    // ! Delete all data from the relational table
    // $rooms = User::find(2)->address()->delete();

    //! Create Many Address for a User
    $user = User::find(2);
    $rooms = $user->address()->createMany([ // you can use create, save, saveMany method also
        ['number' => 1, 'street' => 'street 1', 'country' => 'country 1'],
    ]);

dd($rooms);

    // foreach ($rooms as $room) {
    //     echo $room['comments'] . '<br>';
    // }

    return view('welcome');
});
