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
use App\Http\Controllers\EventController;

Route::get('/', [EventController::class, 'index']);

Route::get('/events/create', [EventController::class, 'create_Event']);

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