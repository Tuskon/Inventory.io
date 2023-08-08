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

/*
Route::get('/empresa', function () {
    return view('site/empresa');
});
*/



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

//No seguinte exemplo vemos um redirecionamento da maneira simples ( A rota "sobre" vai redirecionar para rota "empresa")
Route::get('/sobre',function(){

    return redirect('/empresa');

});

//No seguinte exemplo vemos um redirecionamento porém de maneira mais simples  
Route::redirect('/sobre2', '/empresa');


//Maneira mais simples de renderizar uma view
Route::view('/empresa','site/empresa');


//Neste exemplo vemos a atribuição com o método name para a rota news 
Route::get('/news',function(){

     return view('news');

})->name('noticias');

//Neste exemplo vemos um redirect utilizando o método route com o nome de noticias que é atribuição do método news 
Route::get('/novidades',function(){

     return redirect()->route('noticias');

});

/*

//Neste exemplo a seguir vemos as rotas sendo agrupadas em um  grupo com o prefixo "admim"
Route::prefix('admin')->group (function(){

    Route::get('admin/dashboard',function(){

        return "dashboard";
   
   })->name('dashboard');
   
   Route::get('admin/users',function(){
   
       return "users";
   
   })->name('users');
   
   Route::get('admin/cliente',function(){
   
       return "cliente";
   
   })->name('cliente');


});

*/

//Está redirecionando para o gruipo organizado pelo método nome 
Route::get('/link', function () {

  return redirect()->route('admin.dashboard');
    
});

/*

//Neste exemplo a seguir vemos as rotas sendo agrupadas em um  grupo com o name"admin."
Route::name('admin.')->group(function(){

    Route::get('admin/dashboard',function(){

        return "dashboard";
   
   })->name('dashboard');
   
   Route::get('admin/users',function(){
   
       return "users";
   
   })->name('users');
   
   Route::get('admin/cliente',function(){
   
       return "cliente";
   
   })->name('cliente');

});

*/

//Grupo organizado por prefixos e nomes
Route::group(['prefix'=>'admin',
               'as'=> 'admin.'

], function(){

    Route::get('dashboard',function(){

        return "dashboard";
        
    })->name('dashboard');

    Route::get('users',function(){

        return 'users';

    })->name('users');

    Route::get('clientes',function(){

        return 'clientes';

    })->name('clientes');

});


