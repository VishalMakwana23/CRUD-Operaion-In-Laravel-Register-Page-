<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\registerController;
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
    return view('register');
});

Route::get('/display', function () {
    return view('Display');
});
//Insert Data

Route::post('/submit',[registerController::class,'save']);

//Display Data

Route::get('/display',[registerController::class,'getData']);

//Delete data 

Route::get('/delete/{id}',[registerController::class,'deleteData']);

//Edit Data

Route::get('/edit/{id}',[registerController::class,'editData']);
Route::post('/edit',[registerController::class,'update']);