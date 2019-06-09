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

Route::get('/', function () {
    return view('index');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
    Route::resource('role', 'RoleController', ['except' => ['show']]);
    //Route::resource('cli', 'ClienteController', ['except' => ['show']]);

});
Route::resource('clientes','clienteController');
Route::resource('proveedor','ProveedorController');
Route::resource('precio','PrecioController');
Route::resource('producto','ProductoController');
Route::resource('tproducto','tipoDeProductosController');

Route::get('Reservas', 'ReservasController@index')->name('Reservas') ;

Route::resource('TiposDeAmbiente', 'TiposDeAmbienteController') ;
Route::get('TiposDeAmbiente', 'TiposDeAmbienteController@index')->name('TiposDeAmbiente') ;

Route::resource('OrdenMaestro', 'OrdenMaestroController');
Route::resource('Orden', 'OrdenController');
Route::resource('ListOrden', 'ListController');
Route::resource('ventass', 'VentasController');

Route::get('inventario', 'InventarioController@index')->name('inventario') ;
Route::get('delete/client', 'ClienteController@eliminarCliente')->name('deleteclient') ;

Route::post('selecProduct','VentasController@filtroDeProducto')->name('seleccionProducto');