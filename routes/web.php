<?php

use App\Http\Controllers\AchievementController;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\CreationController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\HobyController;
use App\Http\Controllers\OrganizationController;
use App\Http\Controllers\SertificationController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WorkController;
use App\Models\Sertification;
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


Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('/', DashboardController::class)->name('dashboard');
    Route::get('/user/portofolio', [UserController::class,'portofolio'])->name('portofolio');
    Route::get('/users', [UserController::class,'index'])->name('users');
    Route::post('/users', [UserController::class,'store'])->name('users');
    Route::delete('/users/{id}', [UserController::class,'destroy'])->name('users.delete');
    Route::put('/users/{id}', [UserController::class,'update'])->name('users.update');

    Route::resource('/skills',SkillController::class);
    Route::resource('/hobbies',HobyController::class);
    Route::resource('/organizations',OrganizationController::class);
    Route::resource('/experiences',ExperienceController::class);
    Route::resource('/achivements',AchievementController::class);
    Route::resource('/creations',CreationController::class);
    Route::resource('/sertifications',SertificationController::class);
    Route::resource('/works',WorkController::class); 

    








    Route::get('/',[HomeController::class,'index'])->name('home');
});