<?php

use App\Models\Formula;
use Illuminate\Support\Facades\Route;
use App\Models\Sponsor;
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
        'formulas' => Formula::latest()->get(),
        'sponsors' => Sponsor::all(),
    ]);
});

//Route::get('/ekipa', function () {
//    return view('team');
//});

Route::get('/ekipa', 'App\Http\Controllers\TeamController@show')->name("ekipa");
Route::get('/dirkalniki/{car}', 'App\Http\Controllers\FormulasController@show')->name("formula");
