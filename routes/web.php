<?php

use App\Http\Controllers\AmbienteController;
use App\Http\Controllers\RegistroController;
use App\Http\Controllers\EstadoController;
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
    Route::get('/dash', [AmbienteController::class, 'index'])->name('dash');
});


// Route for the dasborad
Route::get('/profile', function () { return view('dash.profile');})->name('profile');
Route::get('/change-password', function () { return view('dash.change-password');
})->name('change-password');



// Routas for the CRUD
route::resource('ambientes', AmbienteController::class);
Route::get('ambientes', [AmbienteController::class, 'ambientes'])->name('ambientes');
route::resource('llaves', LlaveController::class);
Route::get('llaves', [LlaveController::class, 'index'])->name('llaves');
route::resource('estados', EstadoController::class);
Route::get('estado', [EstadoController::class, 'index'])->name('estado');
Route::resource('registros', RegistroController::class);
Route::get('registro', [RegistroController::class, 'index'])->name('registro');
Route::get('status', [RegistroController::class, 'updateStatusKey'])->name('updateStatusKey');

