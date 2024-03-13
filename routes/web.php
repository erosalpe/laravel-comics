<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {

    $data = [
        [
            'name' => 'Fabio'
        ],
        [
            'name' => 'Mario'
        ],
        [
            'name' => 'Sara'
        ],
        [
            'name' => 'Alex'
        ],
    ];

    return view('welcome', compact('data'));
});

Route::get('/about', function () {

    return view('about');
});
