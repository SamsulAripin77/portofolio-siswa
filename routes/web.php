<?php

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\HobyController;
use App\Http\Controllers\SkillController;
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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::group(['middleware' => ['auth:sanctum']], function () {
    
    Route::get('/users', [UserController::class,'index'])->name('users');
    Route::post('/users', [UserController::class,'store'])->name('users');
    Route::delete('/users/{id}', [UserController::class,'destroy'])->name('users.delete');
    Route::put('/users/{id}', [UserController::class,'update'])->name('users.update');

    Route::resource('/skills',SkillController::class);
    Route::resource('/hobbies',HobyController::class);


    Route::get('/',[HomeController::class,'index'])->name('home');
});