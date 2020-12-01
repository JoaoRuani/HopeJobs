<?php

use App\Http\Controllers\CurriculoController;
use App\Http\Controllers\Empresarial\VagasController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->name('curriculo.')->group(function() {
    Route::get('/curriculo', [CurriculoController::class, 'index'])->name('index');
    Route::get('/curriculo/create', [CurriculoController::class, 'create'])->name('create');
    Route::post('/curriculo/store', [CurriculoController::class, 'store'])->name('store');
});

Auth::routes();
Route::name('vagas.')->prefix('vagas')->group(function() {
    Route::get('/', [VagasController::class, 'index'])->name('index');
});
Route::get('/home', [HomeController::class, 'index'])->name('home');

