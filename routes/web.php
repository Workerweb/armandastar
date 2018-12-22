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
    return view('pages.main');
});

Route::get('/hero_juld', function () {
    return view('pages.heroes./hero_juld');
});

Route::get('/hero_anarbekovi', function () {
    return view('pages.heroes.hero_anarbekovi');
});

Route::get('/hero_danyar', function () {
    return view('pages.heroes.hero_danyar');
});

Route::get('/hero_samson', function () {
    return view('pages.heroes.hero_samson');
});

Route::get('/hero_kamila', function () {
    return view('pages.heroes.hero_kamila');
});

Route::get('/hero_timur', function () {
    return view('pages.heroes.hero_timur');
});


Route::get('/hero_george', function () {
    return view('pages.heroes.hero_george');
});


Route::get('/hero_aliya', function () {
    return view('pages.heroes.hero_aliya');
});


Route::get('/hero_rustem', function () {
    return view('pages.heroes.hero_rustem');
});

Route::get('/hero_gennadiy', function () {
    return view('pages.heroes.hero_genadiy');
});

Route::get('/hero_lyudmila', function () {
    return view('pages.heroes.hero_lyudmila');
});

Route::get('/hero_nurlan', function () {
    return view('pages.heroes.hero_nurlan');
});

Route::get('/hero_saida', function () {
    return view('pages.heroes.hero_saida');
});

Route::get('/hero_shahmurat', function () {
    return view('pages.heroes.hero_shahmurat');
});

Route::get('/hero_alexandr', function () {
    return view('pages.heroes.hero_alexandr');
});

Route::get('/dev', function () {
    return view('pages.dev.dev');
});
