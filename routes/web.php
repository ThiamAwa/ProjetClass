<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');


});

Route::get('/liste_app',[App\Http\Controllers\ApprenantController::class,'index'])->name('liste_app');
Route::get('/liste_form',[App\Http\Controllers\FormationController::class,'index'])->name('liste_form');




