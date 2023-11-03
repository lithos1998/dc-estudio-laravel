<?php
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
})->name('principal');

Route::get('/home', function () {
    return redirect('/');
});

Route::get('/inicio', function () {
    return redirect('/');
});

Route::get('/contacto', function () {
    return view('welcome');
})->name('principal');

Route::get('/administracion', function () {
    return view('welcome');
})->name('principal');

Route::get('/contable', function () {
    return view('contable');
});

Route::get('/blogs', function () {
    return view('blogs');
});

Route::get('/certificaciones', function () {
    return view('certificaciones');
});

Route::get('/newairs', function () {
    return view('newairs');
});


// // when site is in mode construccion
// Route::get('/construccion', function () {
//     return Response::view('construccion');
// })->name('construccion');

// Route::get('/', function () {
//     return Response::view('construccion');
// })->name('construccion');

// -------------------------------------------