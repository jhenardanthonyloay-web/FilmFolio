<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;

// Homepage Route
Route::get('/', function () {
    return view('homepage');
})->name('home');

// Films Page Route
Route::get('/films', function () {
    return view('films');
})->name('films.index');

// Lists Page Route
Route::get('/lists', function () {
    return view('lists');
})->name('lists.index');

// Members Page Route (Idinagdag para sa Members page)
Route::get('/members', function () {
    return view('members');
})->name('members.index');

// Journal Page Route
Route::get('/journal', function () {
    return view('journal');
})->name('journal.index');

// Login Route
Route::get('/login', function () {
    return view('login');
})->name('login');

// Register Routes (Show Form & Handle Submission)
Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);