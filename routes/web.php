<?php

/*
|--------------------------------------------------------------------------
| Rutas web
|--------------------------------------------------------------------------
|
| Aquí es donde puede registrar rutas web para su aplicación. Estas
| RouteServiceProvider carga las rutas dentro de un grupo que
| Contiene el grupo de middleware "web". Ahora crea algo genial!
|
*/
// Aquí inician las Rutas del Index
Route::get('/', function () {
    return view('index.welcome');
});
Route::get('/contacto', function () {
    return view('index.contacto');
});

Route::get('/portafolio-de-servicios', function () {
    return view('index.portafolio');
});

Route::get('/sobre-nosotros', function () {
    return view('index.nosotros');
});



// Aquí terminan las Rutas del Index


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
