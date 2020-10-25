<?php

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



Route::get('/', 'InicioController@index');

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {

    Route::get('permisos', 'PermisoController@index')->name('permiso');
    Route::get('permisos/crear', 'PermisoController@crear')->name('crear_permiso');


});


//Route::resource('admin/permisos', 'Admin\PermisoController');

//Route::view('permisos/{nombre}', 'permiso.index');
