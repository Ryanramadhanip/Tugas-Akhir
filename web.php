<?php

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
    // return view('welcome');
    echo "Selamat datang";
});

Route::get('/satu', function () {
    // return view('welcome');
    echo "One";
});

Route::get('/dua', function () {
    // return view('welcome');
    echo "Two";
});

Route::get('/tiga', function () {
    // return view('welcome');
    echo "Three";
});

Route::get('/empat', function () {
    // return view('welcome');
    echo "Four";
});

Route::get('/lima', function () {
    // return view('welcome');
    echo "Five";
});

Route::get('/enam', function () {
    // return view('welcome');
    echo "Six";
});

Route::get('/tujuh', function () {
    // return view('welcome');
    echo "Seven";
});

Route::get('/delapan', function () {
    // return view('welcome');
    echo "Eight";
});

Route::get('/sembilan', function () {
    // return view('welcome');
    echo "Nine";
});


// 1. Echo langsung nested

Route::get('/sepuluh', function () {
    // return view('welcome');
    echo "Ten";
});


// 2. Manggil View

Route::get('/sepuluh', function () {
    return view('telo');
    // lokasi view
    // resource/views/
});

Route::get('/nemplate', function () {
    return view('template');
    // lokasi view
    // resource/views/
});

// 3. Manggil Controller

Route::get('/usang', 'UsangController@index');
/* file controllernya namanya usangController
    nama url usang
    index nama functionnya
*/

Route::get('/jeruk', 'UsangController@godog');

Route::get('/terong', 'kentang@sandal');

Route::get('/CleaningService', 'CleanerController@tables');

Route::resource('kontak', 'Kontak');

Route::resource('/satpam', 'Satpam');

Route::get('/', function(){
    return view('kontak');
});

Route::get('login','login@index');

Route::post('login/cek','Login@cek');

Route::get('/','Dashboard@index');

Route::get('/logout','login@logout');

Route::resource('/kabupaten', 'Kabupaten');

Route::resource('/penjualan', 'Penjualan');

Route::resource('/barang', 'Barang');

Route::resource('/pembelian', 'Pembelian');

Route::resource('/penyewaan', 'Penyewaan');

Route::resource('/mobil', 'Mobil');

Route::resource('/peminjaman', 'Peminjaman');