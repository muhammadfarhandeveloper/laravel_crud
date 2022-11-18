<?php

use App\Models\Student;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
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

Route::get('/student',[StudentController::class,'Index']);
Route::get('/student/insert',[StudentController::class,'insert']);
Route::post('/store',[StudentController::class,'store']);
Route::get('/student/delete/{id}',[StudentController::class,'delete']);
Route::get('/student/edit/{id}',[StudentController::class,'edit']);
Route::post('/student/update/{id}',[StudentController::class,'update']);
