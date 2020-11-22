<?php

use App\Http\Controllers\CurriculoController;
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

//Curriculos
Route::get('curriculos', 'CurriculoController@listAllCurriculos')->name('curriculos.listAll');
Route::get('curriculos/novo', 'CurriculoController@newCurriculos')->name('curriculo.new');
Route::get('curriculos/editar/{curriculo}', 'CurriculoController@editCurriculo')->name('Curriculo.edit');
Route::post('curriculos/store', 'CurriculoController@storeCurriculo')->name('curriculos.store');
Route::put('curriculos/edit/{user}', 'CurriculoController@edit')->name('curriculos.edit');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');


Route::get('/admin', 'AuthController@dashboard')->name('admin');
Route::get('/admin/login', 'AuthController@LoginForm')->name('admin.login');
Route::get('/admin/login/do', 'AuthController@Login')->name('admin.login.do');
Route::get('/admin/logout', 'AuthController@Logout')->name('admin.logout');

