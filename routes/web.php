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
    return view('welcome');
});


/*

A Rota é basicamente a rota que vai guiar alguma requisição HTTP 

1-tem a declaração da rota

2-o verbo da requisição http ( get,post e delete )

3- e os dois parâmetros com o caminho e uma função callback que está retornando a view

*/
