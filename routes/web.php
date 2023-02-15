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
    // get all users ratting
    // $rooms = User::select('name')
    // ->addSelect(['wrost_ratting' => Comment::select('ratting')
    //     ->whereColumn('user_id', 'users.id')
    //     ->orderBy('ratting', 'asc')
    //     ->limit(1)
    // ])
    // ->get();

    //! get all users who have the most recent reservation
    // $rooms = User::orderByDesc(
    //     Reservation::select('check_in')
    //         ->whereColumn('user_id', 'users.id')
    //         ->orderBy('check_in', 'desc')
    //         ->limit(1)
    // )
    //     ->get();

    // Retrieve users in batches of 1000 records
    // $rooms = User::chunk(1000, function ($users) {
    //     foreach ($users as $user) {
    //         // Perform task on each user
    //         $user->update(['password' => '12345678']);
    //         // or
    //         // sendEmailToUser($user);
    //     }
    // });
    //! if you want update your large amount of data in single query and you ensure that also you want to rollback all the changes if any error occur in the middle of the process then you can use transaction method
    // $rooms = DB::transaction(function () {
    //     User::chunk(10, function ($users) {
    //         foreach ($users as $user) {
    //             $user->update(['password' => '123456789']);
    //             // Introduce a bug
    //             throw new Exception('Intentional error');
    //         }
    //     });
    // });

    //! Cursor and chunk is very close to each other but the difference is that cursor method will not store the result in memory and it will fetch the result from the database one by one and it will not store the result in memory
    // $rooms = DB::table('users')
    // ->orderBy('id')
    // ->cursor()
    // ->each(function ($user) {
    //     // Perform task on each user
    //     $user = User::find($user->id);
    //     $user->update(['password' => now()]);
    // });

    $rooms = User::select('name');
    dd($rooms->toArray());

    return view('welcome');
});
