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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


/** --------------------------------- Roles de gerente ----------------------------------------------------- **/
Route::group(['middleware' => ['auth:sanctum', 'verified', 'role:Empleado']], function () {
    Route::get('material', App\Http\Livewire\MaterialEstudioComponent::class)->name('material');
    Route::get('evaluacion', App\Http\Livewire\EvaluacionComponent::class)->name('evaluacion');
    Route::get('reba', App\Http\Livewire\RebaComponent::class)->name('reba');
    Route::get('recomendaciones', App\Http\Livewire\RecomendacionesComponent::class)->name('recomendaciones');
});
