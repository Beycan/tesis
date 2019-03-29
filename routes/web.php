<?php
session_start();
Route::get('/laravel', function () {
    return view('welcome');
});


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/configuracion','UserController@config')->name('config');
Route::post('/user/update','UserController@update')->name('user.update');
Route::get('/user/avatar/{filename}','UserController@getImage')->name('user.avatar');
Route::get('/restaurant/avatar/{filename}','RestaurantController@getImage')->name('restaurant.image');
Route::get('/platos/{filename}','DishController@getImage')->name('dish.image');
Route::get('/restaurant/{id}','DishController@dishes')->name('restaurant.detalle');

Route::get('/carrito','CarritoController@index')->name('carrito.index');
Route::post('/carrito/add','CarritoController@add')->name('carrito.add');
Route::get('/carrito/up/{indice}','CarritoController@up')->name('carrito.up');
Route::get('/carrito/down/{indice}','CarritoController@down')->name('carrito.down');
Route::get('/carrito/delete-one/{indice}','CarritoController@delete_one')->name('carrito.deleteone');
Route::get('/carrito/delete-all','CarritoController@delete_all')->name('carrito.deleteall');

Route::get('/pedidos','PedidosController@index')->name('pedidos.index');
Route::get('/favoritos','FavoritosController@index')->name('favoritos.index');



