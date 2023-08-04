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

Route::get('/empresa', function () {
    return view('site/empresa');
});



Route::any('/any',function () {
    return "Permite todo tipo de acesso http (put, deletee, get, post...)";
});

Route::match(['put','post'],'/match',function(){

    return "Permite apenas acessos definidos";

});


//No seguinte exemplo vai ser passado um parâmetro via URL ( id ) o parâmetro está entre chaves
Route::get('/produto/{id}',function($id){

    return "O id do produto é: ".$id;
});

//No seguinte exemplo podemos ver que é possível passar mais de um parâmetro
Route::get('/produto2/{id}/{mail}',function($id,$mail){

    return "O id do produto é: ".$id." e o e-mail é: ".$mail;
});  

//No seguinte exemplo é possível ver que com a adição de uma interrogação aos parâmetros entre chaves mais um valor "default" a variável é possível deixa-lá em branco
Route::get('/produto3/{id?}/{mail?}',function($id='',$mail=''){

    return "O id do produto é: ".$id." e o e-mail é: ".$mail;
});  