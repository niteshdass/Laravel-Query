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
    //!get single user
    // $rooms = User::select('name')->where('id', 1)->get();
    // $rooms = User::find([1, 2, 9]); //get multiple users

    //!If your use case like that , you want to update a data and if it doesn't exist then create it then you use First Or
    // $rooms = User::where('email', 'example1@example.com')->firstOr(function () {
    //         User::where('id', 1)->update(['name' => 'new name', 'email' => 'example1@example.com']);
    //     });
    //! If you want to add global scope in the spesific model then you add it in the booted method
    //! If you have common sub query in your all query then you add it global scope in the spesific model
    // $rooms  = Comment::withoutGlobalScopes(['ratting4', 'ratting3'])->get();
    // $rooms  = Comment::withoutGlobalScope('ratting3')->get();
    // $rooms  = Comment::withoutGlobalScopes()->get();

    //! We can also use local scope in the model
    // $rooms  = Comment::ratting(2)->get();
    // $rooms  = Comment::ratting5(5)->get();
    $rooms = Comment::get();
    dd($rooms->toArray());

    return view('welcome');
});
