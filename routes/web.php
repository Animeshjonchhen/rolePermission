<?php

use App\Http\Controllers\MessageController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\UserController;
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


//User
Route::get('/users',[UserController::class,'index']);
Route::get('/users/create',[UserController::class,'create']);
Route::post('/users/create',[UserController::class,'store']);
Route::get('/users/update/{user}',[UserController::class,'edit']);
Route::patch('/users/update/{user}',[UserController::class,'update']);
Route::delete('/users/delete/{user}',[UserController::class,'delete']);


//Login
Route::get('/login',[SessionController::class,'create']);
Route::post('/login',[SessionController::class,'store']);
Route::post('/logout',[SessionController::class,'delete']);


//Message
Route::get('/messages',[MessageController::class,'index']);
Route::get('/message/{message}',[MessageController::class,'show']);
Route::get('/messages/create',[MessageController::class,'create']);
Route::post('/messages/create',[MessageController::class,'store']);
Route::post('/messages/delete/{message}',[MessageController::class,'delete']);
Route::get('/messages/update/{message}',[MessageController::class,'edit']);
Route::patch('/messages/update/{message}',[MessageController::class,'update']);
Route::delete('/messages/delete/{message}',[MessageController::class,'destroy']);


//Role


Route::get('/roles',[RoleController::class,'index']);
Route::get('/roles/create',[RoleController::class,'create']);
Route::post('/roles/create',[RoleController::class,'store']);


