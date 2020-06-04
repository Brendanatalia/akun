<?php

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

Route::get('/login', function () {
    return view('login');
});

Route::get('/jurnal', function () {
    return view('jurnal');
});

Route::get('/transaksi', function () {
    return view('transaksi');
});

Route::get('/bukubesar', function () {
    return view('bukubesar');
});

Route::get('/neracasaldo', function () {
    return view('neracasaldo');
});

Route::get('/labarugi', function () {
    return view('labarugi');
});

Route::get('/neraca', function () {
    return view('neraca');
});

Route::get('/periode', function () {
    return view('periode');
});

Route::get('/utang', function () {
    return view('utang');
});

Route::get('/piutang', function () {
    return view('piutang');
});

Route::get('/register', function () {
    return view('register');
});
