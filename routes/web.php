<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AsosiyController;
use App\Http\Controllers\FoydalanuvchiController;
use App\Http\Controllers\GuestController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/',[AsosiyController::class,'show']);

Route::get('/login',[AsosiyController::class,'loginview'])->name('login');
Route::get('/loginCheck',[AsosiyController::class,'check'])->name('loginCheck');
Route::get('/asosiyga',[AsosiyController::class,'asosiy'])->name('asosiyga');

Route::post('store',[FoydalanuvchiController::class,'store'])->name('guest');

Route::resource('guest',GuestController::class);

Route::get('/forma',[AsosiyController::class,'form'])->name('forma');

Route::get('guest',[FoydalanuvchiCOntroller::class,'show'])->name('guest');


Route::get('/meeting',[AsosiyController::class,'meeting'])->name('meeting');
Route::get('/meeting_detailes',[AsosiyController::class,'meeting_detailes'])->name('meeting_detailes');

