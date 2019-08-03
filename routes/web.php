<?php

use App\Product;



Route::get('/test', function () {
    return view('welcome');
});
//La Home
Route::get('/', function () {
    return view('front.index');
});

//Products

Route::get('/newarrivals', function () {
    return view('front.products.index');
});

//One product
Route::get('/newarrivals/product', function () {
    return view('front.products.product');
});
// Products del Admin

Route::get('/products', 'ProductsController@index'); // Index para productos
Route::get('/products/create', 'ProductsController@create'); // Formulario para crear
Route::post('/products', 'ProductsController@store');
Route::get('/products/{id}', 'ProductsController@show'); // Para enviar los productos al formulario
Route::put('/products/{id}', 'ProductsController@update'); // Ruta para actualizar una productos
Route::get('/products/{id}/edit', 'ProductsController@edit'); // Formulario para editar
Route::delete('/products/{id}', 'ProductsController@destroy'); // Ruta para borrar una productos



//Faq
Route::get('/faq', function () {
    return view('front.faq.index');
});

//Profile
// Route::get('/profile', function () {
// 	if (Auth::user()) {
// 		return view('front.user.index');
// 	} else {
// 		return redirect('/register');
// 	}
// })->name('profile');

// ProfileController

Route::get('/profile/{id}', 'UsersController@show');
Route::put('/profile/{id}', 'UsersController@update');
Route::get('/profile/{id}/edit', 'UsersController@edit');



//Authentication route Laravel

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
