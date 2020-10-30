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

    Route::get('menu', 'MenuController@index')->name('menu');
    Route::get('menu/crear', 'MenuController@crear')->name('crear_menu');
    Route::post('menu', 'MenuController@guardar')->name('guardar_menu');
    Route::get('menu/{id}/editar', 'MenuController@editar')->name('editar_menu');
    Route::put('menu/{id}', 'MenuController@actualizar')->name('actualizar_menu');
    Route::get('menu/{id}/eliminar', 'MenuController@eliminar')->name('eliminar_menu');
    Route::post('menu/guardar-orden', 'MenuController@guardarOrden')->name('guardar_orden');



});


//Route::resource('admin/permisos', 'Admin\PermisoController');

//Route::view('permisos/{nombre}', 'permiso.index');
