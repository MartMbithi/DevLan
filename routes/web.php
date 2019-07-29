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
    return view('index');
});

//route to get about us controller


Route::get('/about_devlan', function ()
{
    return view ('aboutus');
});

//web route to get devlan hacktivity controller

Route::get('/dev_lan_hacktivity', function()
{
    return view('dev_lan_hacktivity');
});

//web route to get devlan platform controller

Route::get('/dev_lan_platform', function()
{
    return view('dev_lan_platform');
});