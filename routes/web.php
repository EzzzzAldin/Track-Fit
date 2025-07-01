<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DietPlan;
use App\Http\Controllers\DietPlanController;
use App\Http\Controllers\Exercise;
use App\Http\Controllers\ExerciseController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StoreController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebController;

Route::get('/', [WebController::class, 'index'])->name('index');
Route::get('/female-home', [WebController::class, 'femaleHome'])->name('female-home');
Route::get('/contact-us', [WebController::class, 'contactUs'])->name('contact-us');
Route::get('/free-plan', [WebController::class, 'freePlan'])->name('free-plan');
Route::get('/job-summary', [WebController::class, 'jobSummary'])->name('job-summary');
Route::get('/jobs', [WebController::class, 'jobs'])->name('jobs');
Route::get('/price', [WebController::class, 'price'])->name('price');
Route::get('/price/female', [WebController::class, 'price'])->name('price.female');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/signup', [AuthController::class, 'signup'])->name('signup');
Route::get('/diet-plan', [DietPlanController::class, 'index'])->name('diet-plan');
Route::get('/exercise', [ExerciseController::class, 'index'])->name('exercise');
Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::get('/store', [StoreController::class, 'index'])->name('store');
Route::get('/checkout', [StoreController::class, 'checkout'])->name('checkout');
Route::get('/checkout/female', [StoreController::class, 'checkout'])->name('checkout.female');
Route::get('/product', [StoreController::class, 'product'])->name('product');
