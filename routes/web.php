<?php

use App\Http\Controllers\CursoController;
use App\Http\Controllers\HomeController;
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


// Route::get('/',HomeController::class);

// Route::get('cursos', [CursoController::class,'index'])->name('cursos.index');

// Route::post('cursos', [CursoController::class,'store'])->name('cursos.store');

// Route::get('cursos/create',[CursoController::class,'create']);

// Route::delete('cursos/{curso}',[CursoController::class,'destroy'])->name('cursos.destroy');

// Route::get('cursos/{curso}', [CursoController::class,'show'])->name('cursos.show');


Route::get('cursos',[CursoController::class,'index'])->name('cursos.index');

Route::post('cursos', [CursoController::class,'store'])->name('cursos.store');

Route::get('cursos/create',[CursoController::class,'create'])->name('cursos.create');

Route::delete('cursos/{curso}',[CursoController::class,'destroy'])->name('cursos.destroy');

Route::get('cursos/{curso}',[CursoController::class,'Show'])->name('cursos.show');

Route::get('cursos/{id}/edit',[CursoController::class,'edit'])->name('cursos.edit');

Route::put('cursos/{curso}',[CursoController::class,'update'])->name('cursos.update');

