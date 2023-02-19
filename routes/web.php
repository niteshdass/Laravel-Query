<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

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

    // $users = DB::table('users')->get();
    //! Pluck return a array if you want to get a single value from the collection then you use it.
    // $users = DB::table('users')->get()->pluck('name', 'email');
    // $users = DB::table('users')->
    // where([['name', '=' ,'Faye Buckridge'],['email', '=', 'll@example.net']])->
    // orWhere('id' , 1)->first();
    // $users = DB::table('users')->value('name');
    // $users = DB::table('users')->find(1);

    // $comments = DB::table('comments')->select('content as comments')->get();
    //! Distinct is used to get the unique value from the table.
    // $comments = DB::table('comments')->count();
    // $comments = DB::table('comments')->max('user_id');
    // $comments = DB::table('comments')->sum('user_id');
    // $comments = DB::table('comments')->avg('user_id');
    // $comments = DB::table('comments')->where('content', 'cont')->doesntExist();
    // $comments = DB::table('comments')->where('content', 'cont')->exists();
    //! Advance Query Builder use annonymous function in query builder.
    // $rooms = DB::table('rooms')->where([['room_size', '>', '3']])->orWhere(function($query) {
    //     $query->where([['room_size', '>', '2'],['room_price', '>', '400']]);
    // })->get();

    // $rooms = DB::table('rooms')->whereBetween('room_price', [200, 400])->get();
    // $rooms = DB::table('reservations')->whereNotIn('user_id', [2, 3])->get();
    // $rooms = DB::table('reservations')->whereMonth('created_at', '1')->get(); // WhereMonth, WhereDay, WhereYear
    //!Wherecolumn is used to compare the column with another column.
    $rooms = DB::table('reservations')->whereColumn([
        ['check_in', '<', 'check_out'],
        ['user_id', '=', 'room_id']
    ])->get();

    $rooms = DB::table('users')->whereExists(function($query) {
        $query->select('id')->from('reservations')->whereRaw(
            'reservations.user_id = users.id'
        )->where('check_in', '>', '2022-12-31')->where('check_out', '2023-01-14')->limit(1);
    })->get();

    dd($rooms);

    return view('welcome');
});
