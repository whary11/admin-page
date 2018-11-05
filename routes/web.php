<?php
use App\Empresa;
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

    $empresa = Empresa::find(1);
    return view('index.welcome', [
        'empresa' => $empresa
    ]);
});
Route::get('/contacto', function () {
    $empresa = Empresa::find(1);
    return view('index.contacto', [
        'empresa' => $empresa
    ]);
});

Route::get('/portafolio-de-servicios', function () {
    $empresa = Empresa::find(1);
    return view('index.portafolio', [
        'empresa' => $empresa
    ]);
});

Route::get('/sobre-nosotros', function () {
    $empresa = Empresa::find(1);
    return view('index.nosotros', [
        'empresa' => $empresa
    ]);
});

// Aquí terminan las Rutas del Index

// Aquí inician las Rutas del Admin
Route::get('/dashboard/datos-contacto', 'EmpresaController@contacto');
Route::get('/dashboard/logotipos', 'EmpresaController@logotipos');
Route::get('/dashboard/inicio', 'EmpresaController@inicio');






Route::get('/dashboard/nosotros', function () {
    return view('admin.nosotros');
})->middleware('auth');

Route::get('/dashboard/servicios', function () {
    return view('admin.servicios');
})->middleware('auth');

Route::get('/dashboard/contacto', function () {
    return view('admin.contacto');
})->middleware('auth');
// Aquí terminan las Rutas del Admin


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


/////Rutas para el cargue de imagenes///////
Route::post('/api/upload', 'ImagenController@upload');


//////Fin de rutas de imagenes////////////




// Recurso de empresa

Route::get('/empresa/index', 'EmpresaController@index');
Route::put('/empresa/update', 'EmpresaController@update');