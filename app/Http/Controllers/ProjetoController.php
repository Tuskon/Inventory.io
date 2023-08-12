<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;
//No comando acima ele está importando a modal 'Produto'


class ProjetoController extends Controller
{
    /**
     * Display a listing of the resource.
     */

     //Este comando cria um controller com vários métodos pré-configurados php artisan make:controller ProjetoController --resource
    public function index()
    {
       // return "Manpulação de Banco de Dados sendo feita...";
    
    //neste comando ele está criando um objeto e fazendo sua debugação com o método " dd " e com a ORM (Object-Relational Mapping) que ao que eu entendi mapeia todos os pontos de uma tabela 
     $produtos = Produto::all();
     return dd($produtos);
       
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
