<?php

use App\Http\Controllers\ProfileController;

use App\Http\Controllers\ProjectController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\PartnersController;
use App\Http\Controllers\StoriesController;
use App\Http\Controllers\ReportController;


use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('login');

Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::get('/users',[UserController::class,'index'])->name('users.index');
Route::get('/users/create',[UserController::class,'create'])->name('users.create');
Route::post('users/',[UserController::class,'store'])->name('users.store');
Route::get('users/{id}/edit',[UserController::class,'edit'])->name('users.edit');
Route::put('users/{id}',[UserController::class,'update'])->name('users.update');
Route::delete('users/{id}',[UserController::class,'destroy'])->name('users.destroy');


Route::get('/projects',[ProjectController::class,'index'])->name('projects.index');
Route::get('/projects/create',[ProjectController::class,'create'])->name('projects.create');
Route::get('projects/{id}',[ProjectController::class,'show'])->name('projects.show');
Route::post('projects/',[ProjectController::class, 'store'])->name('projects.store');
Route::get('projects/{id}/edit',[ProjectController::class, 'edit'])->name('projects.edit');
Route::put('projects/{id}',[ProjectController::class, 'update'])->name('projects.update');
Route::delete('projects/{id}',[ProjectController::class, 'destroy'])->name('projects.destroy');
Route::get('projects/status/{id}',[ProjectController::class, 'status'])->name('projects.status');


Route::get('/activities',[ActivityController::class,'index'])->name('activities.index');
Route::get('/activities/create',[ActivityController::class,'create'])->name('activities.create');
Route::get('activities/{id}',[ActivityController::class,'show'])->name('activities.show');
Route::post('activities/',[ActivityController::class, 'store'])->name('activities.store');
Route::get('activities/{id}/edit',[ActivityController::class, 'edit'])->name('activities.edit');
Route::put('activities/{id}',[ActivityController::class, 'update'])->name('activities.update');
Route::delete('activities/{id}',[ActivityController::class, 'destroy'])->name('activities.destroy');
Route::get('activities/status/{id}',[ActivityController::class, 'status'])->name('activities.status');

Route::get('/partners',[PartnersController::class,'index'])->name('partners.index');
Route::get('/partners/create',[PartnersController::class,'create'])->name('partners.create');
Route::get('partners/{id}',[PartnersController::class,'show'])->name('partners.show');
Route::post('partners/',[PartnersController::class, 'store'])->name('partners.store');
Route::get('partners/{id}/edit',[PartnersController::class, 'edit'])->name('partners.edit');
Route::put('partners/{id}',[PartnersController::class, 'update'])->name('partners.update');
Route::delete('partners/{id}',[PartnersController::class, 'destroy'])->name('partners.destroy');
Route::get('partners/status/{id}',[PartnersController::class, 'status'])->name('partners.status');




Route::get('/stories',[StoriesController::class,'index'])->name('stories.index');
Route::get('/stories/create',[StoriesController::class,'create'])->name('stories.create');
Route::get('stories/{id}',[StoriesController::class,'show'])->name('stories.show');
Route::post('stories/',[StoriesController::class, 'store'])->name('stories.store');
Route::get('stories/{id}/edit',[StoriesController::class, 'edit'])->name('stories.edit');
Route::put('stories/{id}',[StoriesController::class, 'update'])->name('stories.update');
Route::delete('stories/{id}',[StoriesController::class, 'destroy'])->name('stories.destroy');
Route::get('stories/status/{id}',[StoriesController::class, 'status'])->name('stories.status');



Route::get('/reports',[ReportController::class,'index'])->name('reports.index');
Route::get('/reports/create',[ReportController::class,'create'])->name('reports.create');
Route::get('reports/{id}',[ReportController::class,'show'])->name('reports.show');
Route::post('reports/',[ReportController::class, 'store'])->name('reports.store');
Route::get('reports/{id}/edit',[ReportController::class, 'edit'])->name('reports.edit');
Route::put('reports/{id}',[ReportController::class, 'update'])->name('reports.update');
Route::delete('reports/{id}',[ReportController::class, 'destroy'])->name('reports.destroy');
Route::get('reports/status/{id}',[ReportController::class, 'status'])->name('reports.status');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
