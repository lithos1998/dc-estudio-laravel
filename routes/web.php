<?php

use Illuminate\Http\Request;
use Illuminate\Mail\Mailer;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

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

// when site is in mode construccion
Route::get('/construccion', function () {
    return Response::view('construccion');
})->name('construccion');

Route::get('/', function () {
    return Response::view('construccion');
})->name('construccion');

// -------------------------------------------

Route::get('/index.php', function () {
    return Response::view('administracion');
});


/*
| while site is on construction 

    Route::get('/', function () {
        return view('welcome');
    })->name('principal');
*/


Route::get('/home', function () {
    return view('welcome');
})->name('principal');

Route::get('/administracion', function () {
    return Response::view('administracion');
});

Route::get('/contable', function () {
    return Response::view('contable');
});

Route::get('/contratista', function () {
    return Response::view('contratista');
});

Route::get('/certificaciones', function () {
    return Response::view('certificaciones');
});

Route::get('/newairs', function () {
    return Response::view('newairs');
});

// Route::post('/', function(Request $request){
//     // return dd($request);
//     return $request;
//     // Mail::to($request['mail'])
// });