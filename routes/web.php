<?php

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
use App\Http\Middleware\CheckAPI;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('home', function () {
//     return response('Hello World', 200)
//                   ->header('Content-Type', 'text/plain');
// });

Route::resource('/Kijang_Emas','DataOneController');
Route::resource('/OPR','DataTwoController');
Route::resource('/kl_usd_reference_rate','DataThreeController');
// ->middleware(CheckAPI::class);
