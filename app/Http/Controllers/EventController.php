<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function index(){
        $events = Event::all();
        return view('welcome', ['events' => $events]);
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
