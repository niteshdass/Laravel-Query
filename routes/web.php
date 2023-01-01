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

    //? Note
    // You can utilize a transaction if you have many queries that each defend against one another.
    // All queries in a transaction will be rolled back if one fails.
    // and if every query succeeds, the transaction commits every query.

    DB::transaction(function () {
        try {
            DB::table('users')->delete(5);
            $result = DB::table('users')->where('id', 4)->update(['name' => 'John Doe']);
            // Just to be sure you can return an exception, trnasaction often does so whenever any query fails.
            if (!$result) {
                throw new \Exception('Error');
            }
        } catch (\Exception $e) {
            DB::rollBack();
        }
    });



    return view('welcome');
});
