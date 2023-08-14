<?php

use Illuminate\Support\Facades\Route;


use App\Models\User;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Str;

use App\Http\Controllers\WidgetController;



Route::get('/export-widget-data', [WidgetController::class, 'exportData'])->name('export.data');
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

Route::get('/forgotpassword', 'App\Http\Controllers\Auth\ForgotPasswordController@forgotpassword')->name('forgotpassword');

Route::get('/register', 'App\Http\Controllers\Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('/register', 'App\Http\Controllers\Auth\RegisterController@registerAction')->name('register');


Route::group(['middleware' => 'web'], function () {
    Route::get('/forgot-password', function () {
        return view('forgotpassword');
    })->middleware('guest')->name('password.request');

    Route::post('/forgot-password', function (Request $request) {
        $request->validate(['email' => 'required|email']);

        $status = Password::sendResetLink(
            $request->only('email')
        );

        return $status === Password::RESET_LINK_SENT
            ? back()->with(['status' => __($status)])
            : back()->withErrors(['email' => __($status)]);
    })->middleware('guest')->name('password.email');

    Route::get('/reset-password/{token}', function (string $token) {
        return view('resetpassword', ['token' => $token]);
        // return view('resetpassword');
    })->middleware('guest')->name('password.reset');


    Route::post('/reset-password', function (Request $request) {

        $request->validate([
            'token' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8|confirmed',
        ]);

        $status = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function (User $user, string $password) {
                $user->forceFill([
                    'password' => Hash::make($password)
                ])->setRememberToken(Str::random(60));

                $user->save();

                event(new PasswordReset($user));
            }
        );

        return $status === Password::PASSWORD_RESET
                    ? redirect()->route('login')->with('status', __($status))
                    : back()->withErrors(['email' => [__($status)]]);
    })->middleware('guest')->name('password.update');
});
