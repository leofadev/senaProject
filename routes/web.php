<?php

use App\Http\Controllers\AmbienteController;
use App\Http\Controllers\LlaveController;
use App\Models\Llave;
use Illuminate\Support\Facades\Route;


// Route for login and register
Route::get('/', function () { return view('auth.login');});
Route::get('/register', function () { return view('auth.register');})->name('register');


// Route for the validation the login
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('dash', [AmbienteController::class, 'index'])->name('dash');
});


// Route for the dasborad
Route::get('/profile', function () { return view('dash.profile');})->name('profile');
Route::get('/change-password', function () { return view('dash.change-password');
})->name('change-password');


// Routas for the CRUD
route::resource('ambientes', AmbienteController::class);
route::resource('llaves', LlaveController::class);
Route::get('ambientes', [AmbienteController::class, 'ambientes'])->name('ambientes');
Route::get('llaves', [LlaveController::class, 'index'])->name('llaves');

