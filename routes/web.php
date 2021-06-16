<?php

use App\Http\Controllers\contract ;
use App\Http\Controllers\sendcontroller ;
use Illuminate\Support\Facades\Route;

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

Route::get('/sendMail',[contract::class,'sendMail']);
Route::get('/jibon',[sendcontroller::class,'contractm']);