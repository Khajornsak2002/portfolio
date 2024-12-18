<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth')->name('dashboard');

Route::get('/projects', [ProjectController::class, 'index'])->name('project');
Route::get('/projects/{id}', [ProjectController::class, 'show'])->name('projects.show');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/programmer-projects', function () {
    return view('programmer-projects');
})->name('programmer-projects');

Route::get('/activities', function () {
    return view('activities');
})->name('activities');

Route::get('/certificates', function () {
    return view('certificates');
})->name('certificates');

Route::post('/logout', function () {
    Auth::logout();
    return redirect('/login');
})->name('logout');
