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
Route::get('/schools/create', [\App\Http\Controllers\SchoolController::class, 'create'])->name('schools.create');
Route::post('/schools', [\App\Http\Controllers\SchoolController::class, 'store'])->name('schools.store');
Route::get('/schools/{school}', [\App\Http\Controllers\SchoolController::class, 'show'])->name('schools.show');

//Routes for Student

Route::get('/students', [\App\Http\Controllers\StudentController::class, 'index'])->name('students.index');
Route::get('/students/create', [\App\Http\Controllers\StudentController::class, 'create'])->name('students.create');
Route::post('/students', [\App\Http\Controllers\StudentController::class, 'store'])->name('students.store');
Route::get('/students/{student}', [\App\Http\Controllers\StudentController::class, 'show'])->name('students.show');

//Routes for Team

Route::get('/teams', [\App\Http\Controllers\TeamController::class, 'index'])->name('teams.index');
Route::get('/teams/create', [\App\Http\Controllers\TeamController::class, 'create'])->name('teams.create');
Route::post('/teams', [\App\Http\Controllers\TeamController::class, 'store'])->name('teams.store');
Route::get('/teams/{team}', [\App\Http\Controllers\TeamController::class, 'show'])->name('teams.show');
Route::get('/teams/{team}/members', [\App\Http\Controllers\TeamController::class, 'showMembers'])->name('teams.show.members');
