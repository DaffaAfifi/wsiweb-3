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
Route::get('/class', [ClassController::class, 'index']); 
Route::get('/ekskul', [ExtracurricularController::class, 'index']); 
Route::get('/teacher', [TeacherController::class, 'index']); 