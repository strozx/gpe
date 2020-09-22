<?php

use Illuminate\Support\Facades\Route;
use App\Models\Formula;
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
    return view('welcome', [
        'formulas' => Formula::latest()->get()
    ]);
});

//Route::get('/ekipa', function () {
//    return view('team');
//});

Route::get('/ekipa', 'App\Http\Controllers\TeamsController@show')->name("ekipa");
