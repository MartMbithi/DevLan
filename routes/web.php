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
Route::get('/devlan_aboutus', function ()
{
    return view ('aboutus');
});

//web route to get devlan hacktivity controller
Route::get('/devlan_hacktivity', function()
{
    return view('devlan_hacktivity');
});


//web route to get devlan platform controller
Route::get('/devlan_platform', function()
{
    return view('devlan_platform');
});


//web route to get devlan platform members....or the gang behind devlan
Route::get('/devlan_team',function()
{
    return view('devlan_team');
});