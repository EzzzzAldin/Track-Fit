<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;

Route::get('/', [WebController::class, 'index'])->name('index');
Route::get('/female-home', [WebController::class, 'femaleHome'])->name('female-home');
Route::get('/contact-us', [WebController::class, 'contactUs'])->name('contact-us');
Route::get('/free-plan', [WebController::class, 'freePlan'])->name('free-plan');
Route::get('/job-summary', [WebController::class, 'jobSummary'])->name('job-summary');
Route::get('/jobs', [WebController::class, 'jobs'])->name('jobs');
Route::get('/price', [WebController::class, 'price'])->name('price');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/signup', [AuthController::class, 'signup'])->name('signup');
