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
Route::get('/admin/datos-contacto', 'EmpresaController@contacto');


Route::get('/admin/logotipos', function () {
    return view('admin.logotipos');
})->middleware('auth');


Route::get('/admin/inicio', function () {
    return view('admin.inicio');
});

Route::get('/admin/nosotros', function () {
    return view('admin.nosotros');
})->middleware('auth');

Route::get('/admin/servicios', function () {
    return view('admin.servicios');
})->middleware('auth');

Route::get('/admin/contacto', function () {
    return view('admin.contacto');
})->middleware('auth');
// Aquí terminan las Rutas del Admin


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');




// Recurso de empresa

Route::get('/empresa/index', 'EmpresaController@index');
Route::put('/empresa/update', 'EmpresaController@update');