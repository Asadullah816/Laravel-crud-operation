<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\Usercontroller;
use Illuminate\Support\facades\DB;

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
Route::view('add','add');
Route::get('list',[Usercontroller::class,'show']);
Route::post('add',[Usercontroller::class,'addmem']);
Route::get('delete/{id}',[Usercontroller::class,'delete']);
Route::view('edit','edit');
Route::get('edit/{id}',[Usercontroller::class,'showData']);
Route::post('edit',[Usercontroller::class,'update']);

// =============Query-builder=========/
// Route::view('qblist'.'qblist');

Route::get('qblist',[Usercontroller::class,'qbshowdata']);
