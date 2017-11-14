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
    return view('welcome');
});

route::get('/about',function() {
	return '<h1>Halo</h1>'
	.'Selamat datang di webapp saya<br>'
	.'Laravel, emang keren.';
});

route::get('/about/1',function() {
	return '<h1>Ini Halaman about 1.<br>'.'You Like This';
});

route::get('/about/2',function() {
	return '<h1>Ini Halaman about 2.<br>'.'This Is Laugh';
});

route::get('/about/3',function() {
	return '<h1>Ini Halaman about 3.</h1><br>'.'Never Ending Struggle';
});

route::get('/about/4',function() {
	return '<h1>Ini Halaman about 4.<br>'.'You Lie';
});

route::get('/about/5',function() {
	return '<h1>Ini Halaman about 5.<br>'.'One Shot One Kill';
});

//route parameter
route::get('/about/{id}',function($a) {
	return '<h1>ini Halaman About</h1>&nbsp;'.$a;
});

route::get('/kontak', function() {
	return view('kontak');
});


route::get('/kantin/{tuang}/{eeut}/{lolodok}', function($z,$x,$c) {
	return 'Saya Pesan &nbsp;'.'<b>'.$z.'</b><br>'
			.'Minumnya &nbsp;'.'<b>'.$x.'</b><br>'
			.'Tambah cemilan &nbsp;'.'<b>'.$c.'</b><br>';
});

route::get('user/{name?}', function ($name = 'Angga') {
	return 'Nama Saya '.$name;
});