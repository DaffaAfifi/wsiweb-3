<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\ExtracurricularController;
use App\Http\Controllers\TeacherController;

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
    return view('home', [
        'name' => 'Daffa Afifi',
        'role' => 'admin',
        'cewe' => ['Elok Nurlaili', 'Herdiani Lusianasari', 'Balqis Iftitania Pasha']
    ]);
});

Route::get('/students', [StudentController::class, 'index']); 
Route::get('/student/{id}', [StudentController::class, 'show']); 
Route::get('/students-add', [StudentController::class, 'create']); 
Route::post('/student', [StudentController::class, 'store']); 
Route::get('/students-edit/{id}', [StudentController::class, 'edit']); 
Route::put('/student/{id}', [StudentController::class, 'update']);
Route::get('/students-delete/{id}', [StudentController::class, 'delete']); 
Route::delete('/students-destroy/{id}', [StudentController::class, 'destroy']); 

Route::get('/class', [ClassController::class, 'index']); 
Route::get('/classd/{id}', [ClassController::class, 'show']); 

Route::get('/ekskul', [ExtracurricularController::class, 'index']); 
Route::get('/ekskuld/{id}', [ExtracurricularController::class, 'show']); 

Route::get('/teacher', [TeacherController::class, 'index']); 
Route::get('/teacherd/{id}', [TeacherController::class, 'show']); 