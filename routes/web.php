<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClassesController;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\FrontCampusController;
use App\Http\Controllers\frontend\AdmissionController;
use App\Http\Controllers\frontend\FrontendController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\SubjectController;

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


Route::prefix('/')->name('frontend.')->group(function(){
    Route::get('/', [FrontendController::class, 'index'])->name('index');
});

// $user_role = Auth()->user()->role;

// if($user_role == 'admin' || $user_role == 'teacher'){


Route::prefix('/dashboard')->middleware(['auth', 'verified'])->group(function(){

    //Dashboard
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    //School Setup
    Route::resource('/school-setup', 'App\Http\Controllers\SchoolSetupController');

    //## Front Pages ##//
        //Banner Setup
        Route::resource('/banner', 'App\Http\Controllers\BannerController');
        //Campus Setup
        Route::resource('/front-campus', FrontCampusController::class);
        //Admission Setup
        Route::resource('/front-admission', AdmissionController::class);

    //Teacher
    Route::resource('/teacher', 'App\Http\Controllers\TeacherController');
    Route::get('/teacher/{id}/status', ['as' => 'teacher.status', 'uses' => 'App\Http\Controllers\TeacherController@status']);

    //Student
    Route::resource('/student', StudentController::class);
    Route::get('/student/{id}/status', [StudentController::class, 'status'])->name('student.status');
    Route::get('/student/{id}/delete', ['as' => 'student.delete', 'uses' => 'App\Http\Controllers\StudentController@destroy']);


    //Classes
    Route::resource('/classes', 'App\Http\Controllers\ClassesController');
    Route::get('/classes/{id}/status', [ClassesController::class, 'status'])->name('classes.status');
    Route::put('/classes/{id}/update', ['as' => 'classes.updates', 'uses' => 'App\Http\Controllers\ClassesController@update']);
    Route::delete('/classes/{id}/delete', ['as' => 'classes.deletes', 'uses' => 'App\Http\Controllers\ClassesController@destroy']);

    //Subjects
    Route::resource('/subject', SubjectController::class);
    Route::get('/subject/{id}/status', [SubjectController::class, 'status'])->name('subject.status');
    Route::put('/subject/{id}/update', ['as' => 'subject.updates', 'uses' => 'App\Http\Controllers\SubjectController@update']);
    Route::delete('/subject/{id}/delete', ['as' => 'subject.deletes', 'uses' => 'App\Http\Controllers\SubjectController@destroy']);

    //Setting
    Route::resource('/setting', 'App\Http\Controllers\backend\SettingController');
    Route::post('/setting/{dbtable}', ['as' => 'setting.stores', 'uses' => 'App\Http\Controllers\backend\SettingController@store']);
    Route::post('/setting/{id}/{dbtable}/update', ['as' => 'setting.updates', 'uses' => 'App\Http\Controllers\backend\SettingController@update']);
    Route::post('/setting/{id}/{dbtable}/destroy', ['as' => 'setting.destroing', 'uses' => 'App\Http\Controllers\backend\SettingController@destroy']);
});
// }
require __DIR__.'/auth.php';
