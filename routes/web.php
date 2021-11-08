<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::middleware(['autenticacio'])->group(function () {
    // VAN TOTES LES URLS PRIVADES -> USUARIS NO GUEST -> REGULAR USERS
    Route::get('/privada1',function() {
        echo 'Privada1';
    });

    Route::get('/privada2',function() {
        echo 'Privada2';
    });
});

//Route::get('/privada1',function() {
//    echo 'Privada1';
//})->middleware(['autenticacio']);
//
//Route::get('/privada2',function() {
//    echo 'Privada2';
//})->middleware(['autenticacio']);

require __DIR__.'/auth.php';
