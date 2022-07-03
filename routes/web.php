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
use App\Models\Organization;
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
    Route::get('/',[DashboardController::class,'dashboard'])->name('home');
    Route::get('/user/portofolio', [DashboardController::class,'portofolio'])->name('portofolio');

    Route::get('/users', [UserController::class,'index'])->name('users');
    Route::post('/users', [UserController::class,'store'])->name('users');
    Route::delete('/users/{id}', [UserController::class,'destroy'])->name('users.delete');
    Route::put('/users/{id}', [UserController::class,'update'])->name('users.update');

    Route::resource('/skills',SkillController::class);
    Route::resource('/hobbies',HobyController::class);

    Route::get('/organizations/validation/{organization}/{validation}', [OrganizationController::class,'validation'])->name('organization.validation');
    Route::resource('/organizations',OrganizationController::class);

    Route::get('/experiences/validation/{experience}/{validation}', [ExperienceController::class,'validation'])->name('experiences.validation');
    Route::resource('/experiences',ExperienceController::class);

    Route::get('/achivements/validation/{achievement}/{validation}', [AchievementController::class,'validation'])->name('achivements.validation');
    Route::resource('/achivements',AchievementController::class);

    Route::get('/creations/validation/{creation}/{validation}', [CreationController::class,'validation'])->name('creations.validation');
    Route::resource('/creations',CreationController::class);

    Route::get('/sertifications/validation/{sertification}/{validation}', [SertificationController::class,'validation'])->name('sertifications.validation');
    Route::resource('/sertifications',SertificationController::class);
    
    Route::get('/works/validation/{work}/{validation}', [WorkController::class,'validation'])->name('works.validation');
    Route::resource('/works',WorkController::class); 
});