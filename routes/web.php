<?php

use Illuminate\Support\Facades\Route;

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
    return view('register');
});



Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'dashboard'])->name('dashboard');

Route::get('/ph', [App\Http\Controllers\FiturController::class, 'ph'])->name('ph');
Route::get('/do', [App\Http\Controllers\FiturController::class, 'do'])->name('do');
Route::get('/suhu', [App\Http\Controllers\FiturController::class, 'suhu'])->name('suhu');
Route::get('/tds', [App\Http\Controllers\FiturController::class, 'tds'])->name('tds');
Route::get('/report', [App\Http\Controllers\FiturController::class, 'report'])->name('report');

Route::get('user', 'App\Http\Controllers\UserController@user')->name('user');
Route::delete('/users/{user}', 'App\Http\Controllers\UserController@destroy')->name('users.destroy');


// Route::get('/login', 'App\Http\Controllers\Auth\LoginController@login')->name('login');
// Route::get('/register', 'App\Http\Controllers\Auth\RegisterController@register')->name('register');




Route::get('/login', 'App\Http\Controllers\Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', 'App\Http\Controllers\Auth\LoginController@login');


Route::get('/register', 'App\Http\Controllers\Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('/register', 'App\Http\Controllers\Auth\RegisterController@registerAction')->name('register');

