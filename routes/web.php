<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LigacgController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\FormUserController;
use App\Http\Controllers\ChartController;

use App\Models\Ligacg;

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
Route::middleware(['guest'])->group(function () {
    Route::get('/', function () {
        return view('login.index');
    });
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'authenticate']);

    Route::get('/register', [RegisterController::class, 'index']);
    Route::post('/register', [RegisterController::class, 'store']);
});

Route::middleware(['auth'])->group(function () {
    Route::post('/logout', [LoginController::class, 'logout']);
    Route::get('/dashboard',function(){
         return view('dashboard.index');
    }); 
    Route::get('/dashboard', [ChartController::class, 'index'])->name('dashboard');
    Route::resources([
        '/dashboard/ligacg' => LigacgController::class,
        '/form-user' => FormUserController::class
    ]);
});


