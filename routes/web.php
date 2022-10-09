<?php

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

//Routes for Homepage
Route::get('/', [\App\Http\Controllers\HomepageController::class, 'homepage'])->name('homepage.homepage');

//Routes for School

Route::get('/schools', [\App\Http\Controllers\SchoolController::class, 'index'])->name('schools.index');

//Routes for Student

Route::get('/students', [\App\Http\Controllers\StudentController::class, 'index'])->name('students.index');

//Routes for Team

Route::get('/teams', [\App\Http\Controllers\TeamController::class, 'index'])->name('teams.index');
