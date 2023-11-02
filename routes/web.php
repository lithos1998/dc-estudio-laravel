<?php

use Illuminate\Http\Request;
use Illuminate\Mail\Mailer;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;


Route::get('/', function () {
    return view('welcome');
})->name('principal');

Route::get('/home', function () {
    return redirect('principal');
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
    return Response::view('contable');
});

Route::get('/blogs', function () {
    return Response::view('blogs');
});

Route::get('/certificaciones', function () {
    return Response::view('certificaciones');
});

Route::get('/newairs', function () {
    return Response::view('newairs');
});


// // when site is in mode construccion
// Route::get('/construccion', function () {
//     return Response::view('construccion');
// })->name('construccion');

// Route::get('/', function () {
//     return Response::view('construccion');
// })->name('construccion');

// -------------------------------------------