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
    $nome = "Gustavo";
    $vetor = array(10,20,30,40,50);
    $nomes = array('Gusta', 'Maria', 'Jose', 'Gabi', 'Paula');
    return view('welcome', ["nome" => $nome, "vetor" => $vetor, "nomes" => $nomes]);
});

Route::get('/contatos', function () {
    return view('contatos');
});

//Definindo o valor default de id como 1.
Route::get('/produtos/{id?}', function($id = 1){
    return view('products', ['id' => $id]);
});

Route::get('/produtos_teste', function($id = 1){
    $busca = request('search');

    return view('produtos', ['busca' => $busca]);
});