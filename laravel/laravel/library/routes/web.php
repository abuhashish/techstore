<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CatController;
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
//books
Route::get('/', function () {return view('welcome');});
Route::get('books',[BookController::class,'index']);
Route::get('books/latest',[BookController::class,'last3']);
Route::get('books/show/{id}',[BookController::class,'show']);
Route::get('books/search/{keyword}',[BookController::class,'search']);
Route::get('books/create',[BookController::class,'create']);
Route::post('books/store',[BookController::class,'store']);
Route::get('books/edit/{id}',[BookController::class,'edit']);
Route::post('books/update/{id}',[BookController::class,'update']);
Route::get('books/delete/{id}',[BookController::class,'delete']);

//cats
Route::get('/', function () {return view('welcome');});
Route::get('cats',[CatController::class,'index']);
Route::get('cats/latest',[CatController::class,'last3']);
Route::get('cats/show/{id}',[CatController::class,'show']);
Route::get('cats/search/{keyword}',[CatController::class,'search']);
Route::get('cats/create',[CatController::class,'create']);
Route::post('cats/store',[CatController::class,'store']);
Route::get('cats/edit/{id}',[CatController::class,'edit']);
Route::post('cats/update/{id}',[CatController::class,'update']);
Route::get('cats/delete/{id}',[CatController::class,'delete']);

//auth
// Route::get('register',[AuthController::class,'getRegisterForm']);
// Route::post('register',[AuthController::class,'register']);

// Route::get('login',[AuthController::class,'getLoginForm']);
// Route::post('login',[AuthController::class,'login']);

// Route::post('logout',[AuthController::class,'logout']);
