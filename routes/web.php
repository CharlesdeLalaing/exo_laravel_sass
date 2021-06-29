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

Route::get('/welcome', function () {
    $pageName = 'welcome';
    return view('pages.welcome', compact('pageName'));
});

Route::get('/services', function () {
    $pageName = 'services';
    return view('pages.services', compact('pageName'));
});

Route::get('/about', function () {
    $pageName = 'about';
    return view('pages.about', compact('pageName'));
});