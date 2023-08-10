<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    //

   //Esta é uma função que vai retornar a palavra index, a rota dela está em web,php 
    public function index(){

        return "index";
    }

   //Esta é uma função retornanda por uma rota que vai retornar uma frase mais uma variável php definida na URL
    public function show($id=''){

        return "O id do produto é: ".$id;

    }
}
