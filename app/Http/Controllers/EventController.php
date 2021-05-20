<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index(){
        $nome = "Gustavo";
        $vetor = array(10,20,30,40,50);
        $nomes = array('Gusta', 'Maria', 'Jose', 'Gabi', 'Paula');
        return view('welcome', ["nome" => $nome, "vetor" => $vetor, "nomes" => $nomes]);
    }

    public function create_Event(){
        return view('events.create');
    }

    public function contatos(){
        return view('contatos');
    }

    public function products($id = 1){
        return view('products', ['id' => $id]);
    }

    public function search_product($id=1){
        $busca = request('search');

        return view('produtos', ['busca' => $busca]);
    }
}
