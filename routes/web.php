<?php

use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\frontend\FrontendController;
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

Route::get('/', [FrontendController::class, 'index'])->name('frontend.index');


Route::prefix('/dashboard')->middleware(['auth', 'verified'])->group(function(){

    //Dashboard
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    //School Setup
    Route::resource('/school-setup', 'App\Http\Controllers\SchoolSetupController');

    //Banner Setup
    Route::resource('/banner', 'App\Http\Controllers\BannerController');

    //Teacher
    Route::resource('/teacher', 'App\Http\Controllers\TeacherController');

    //Classes
    Route::resource('/classes', 'App\Http\Controllers\ClassesController');

    //Setting
    Route::resource('/setting', 'App\Http\Controllers\backend\SettingController');
    Route::post('/setting/{dbtable}', ['as' => 'setting.stores', 'uses' => 'App\Http\Controllers\backend\SettingController@store']);
    Route::post('/setting/{id}/{dbtable}/update', ['as' => 'setting.updates', 'uses' => 'App\Http\Controllers\backend\SettingController@update']);
    Route::post('/setting/{id}/{dbtable}/destroy', ['as' => 'setting.destroing', 'uses' => 'App\Http\Controllers\backend\SettingController@destroy']);
});

require __DIR__.'/auth.php';
