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
 //!get the total number of comments for each user
    $room = DB::table('comments')->
    //! you can use selectRaw() instead of select() and use DB::raw() instead of raw()
    // select(
    //     DB::raw('count(user_id) as total_comments, users.name as name'
    // ))
    selectRaw(
        'count(user_id) as total_comments, users.name as name'
    )
    ->join(
        'users', 'users.id', '=', 'comments.user_id'
    )->groupBy('user_id')->orderBy('total_comments', 'desc')
    ->get();

    //! Get the all comments length and order by length

    // $rooms = DB::table('comments')->selectRaw(
    //     'LENGTH(content) as comment_length, content',
    // )->orderByRaw('
    //     LENGTH(content) DESC
    // ')->get();

    $rooms = DB::table('comments')->selectRaw(
        'count(id) as number_of_5star_comments, ratting',
    )->groupBy('ratting')->where('ratting', '=', 5)->get();

    dd($rooms);

    return view('welcome');
});
