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
    //* Query Builder is faster then Eloquent ORM (Object Relational Mapping) 
    //! Hard to write and read
    // $users = DB::table('users')->get();


    //! Eloquent ORM (Object Relational Mapping) is slow then DB::table() method (query builder)
    //! Eloquent ORM use case is when you update delete or insert data to database and also when you need to use relationships between tables
    //* Easy to write and read
    //* There have some features like , Events, Mutators, Accessors, Relationships, Scopes, SoftDeletes etc...
    $users = User::all();

    
    dump($users);

    return view('welcome');
});
