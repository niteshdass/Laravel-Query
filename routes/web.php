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
  
    // ! Apply select and where condition on relationship table
    // $rooms = User::find(3)->comments()->where('ratting', '<', '3')->get();

    // $rooms = User::has('comments', '>', 2)->get();
    $rooms = User::doesntHave('comments')->get();

    // ! withCount method is used to count the relationship table
    // $rooms = User::withCount([
    //     'comments',
    //     'comments as good_comments_count' => function ($query) {
    //         $query->where('ratting', '>', 2);
    //     }
    // ])->get();

dd($rooms->toArray());

    // foreach ($rooms as $room) {
    //     echo $room['comments'] . '<br>';
    // }

    return view('welcome');
});
