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
    return View::make('index');
});


//route to get about us route
Route::get('aboutus', function()
{
    return View::make ('devlan_aboutus');
});


//web route to get devlan hacktivity controller
Route::get('devlan_hacktivity', function()
{
    return View::make('devlan_hacktivity');
});


//web route to get devlan platform controller
Route::get('platform', function()
{
    return View::make('devlan_platform');
});


//web route to get devlan platform members....or the gang behind devlan
Route::get('team',function()
{
    return View::make('devlan_team');
});


