<?php

use Illuminate\Support\Facades\Route;
use App\Solid;
use App\Solid\Areacalculate;
use App\Solid\Rectangle;

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
    return view('welcome');
});
Route::get('/openclosed', function () {
    return (new Areacalculate)->totalarea([
        new Rectangle(20,12)
    ]);
    // return view('welcome');
});
