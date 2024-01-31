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
    return view('index');
});

Route::get('/greeting', function ($name = null)
{
    // $data['name'] = 'Jade'; 
    // $data['lastName'] = 'Acurio';
    
    $name = 'Jade'; 
    $lastName = 'Naranjo';

    return view('folder.greeting', compact('name', 'lastName'));
})->name("greeting");

Route::get('/test', function ()
{
    return "It's a testing";
})->name("test");

Route::get('/sum/{a}/{b}', function ($a, $b)
{
    return $a + $b;
})->name("sum");



Route::get('/ciclos', function ()
{
    return view('folder.ciclos');
})->name("ciclos");

