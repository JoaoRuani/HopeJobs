<?php

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

//Usuarios
Route::get('usuarios', 'Form\\UsuarioController@listAllUsers')->name('users.listAll');
Route::get('usuarios/novo', 'Form\\UsuarioController@newUser')->name('user.new');
Route::get('usuarios/editar/{user}', 'Form\\UsuarioController@editUser')->name('user.edit');
Route::post('usuarios/store', 'Form\\UsuarioController@storeUser')->name('users.store');
Route::put('usuarios/edit/{user}', 'Form\\UsuarioController@edit')->name('users.edit');

//Curriculos
Route::get('curriculos', 'Form\\CurriculoController@listAllCurriculos')->name('curriculos.listAll');
Route::get('curriculos/novo', 'Form\\CurriculoController@newCurriculos')->name('curriculo.new');
Route::get('curriculos/editar/{curriculo}', 'Form\\CurriculoController@editCurriculo')->name('Curriculo.edit');
Route::post('curriculos/store', 'Form\\CurriculoController@storeCurriculo')->name('curriculos.store');
Route::put('curriculos/edit/{user}', 'Form\\CurriculoController@edit')->name('curriculos.edit');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/admin', 'AuthController@dashboard')->name('admin');
Route::get('/admin/login', 'AuthController@LoginForm')->name('admin.login');
Route::get('/admin/login/do', 'AuthController@Login')->name('admin.login.do');
Route::get('/admin/logout', 'AuthController@Logout')->name('admin.logout');

