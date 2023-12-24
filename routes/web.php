<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{CourseController, MaterialController};
use App\Models\{Material, Course};

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $active = 'home';
    $dataCourse = Course::count();
    $dataMateri = Material::count();
    return view('welcome', compact('active', 'dataCourse', 'dataMateri'));
});

Route::get('/material', [MaterialController::class, 'index'])->name('material.index');
Route::post('/material/store', [MaterialController::class, 'store'])->name('store');
Route::get('/material/destroy/{id}', [MaterialController::class, 'destroy'])->name('material.destroy');
Route::get('/material/edit/{id}', [MaterialController::class, 'edit'])->name('material.edit');
Route::get('/material/show/{id}', [MaterialController::class, 'show'])->name('material.show');
Route::get('/material/edit/{id}', [MaterialController::class, 'edit'])->name('material.edit');
Route::post('/material/update/{id}', [MaterialController::class, 'update'])->name('material.update');

Route::get('/course', [CourseController::class, 'index'])->name('course.index');
Route::post('/course/store', [CourseController::class, 'store'])->name('store');
Route::get('/course/destroy/{id}', [CourseController::class, 'destroy'])->name('course.destroy');
Route::get('/course/edit/{id}', [CourseController::class, 'edit'])->name('course.edit');
Route::get('/course/show/{id}', [CourseController::class, 'show'])->name('course.show');
Route::post('/course/update/{id}', [CourseController::class, 'update'])->name('course.update');
