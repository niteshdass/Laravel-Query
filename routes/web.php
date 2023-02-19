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
    //! Because Laravel doesn't support full text search migration, that's why we have to use DB::statement() to create full text index
    // $rooms = DB::statement('ALTER TABLE `comments` ADD FULLTEXT INDEX post_title_index (content)');
    
    $rooms = DB::table('comments')->whereRaw(
        "MATCH(content) AGAINST(? IN BOOLEAN MODE)", 
        ['+consequuntur accusant -dicta']
    )->get();
    dd($rooms);

    return view('welcome');
});
