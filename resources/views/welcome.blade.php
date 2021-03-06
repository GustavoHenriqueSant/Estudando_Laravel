@extends('layouts.main')

@section('title', 'Welcome')

@section('content')

<div id="search-container" class="col-md-12">
    <h1>Busque um evento meu chapa</h1>
    <form action="">
        <input type="text" id="search" name="search" class="form-control" placeholder="Procurar...">
    </form>
</div>

<div id="events-container" class="col-md-12">
    <h2>Próximos eventos</h2>
    <p>Vejo os eventos dos próximos dias:</p>

    <div id="cards-container" class="row">
        @foreach($events as $event)
            <div class="card col-md-3">
                <img src="/img/evento1.jpg" alt="{{$event->title}}">
                <div class="card-body">
                    <p class="card-date">10/09/2021</p>
                    <h5 class="card-title">{{$event->title}}</h5>
                    <p class="card-participantes">X participantes</p>
                    <a href="" class="btn btn-primary">Saber mais</a>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection