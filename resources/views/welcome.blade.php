@extends('layouts.main')

@section('title', 'Welcome')

@section('content')

@foreach($events as $event)
    <p> Título do evento: {{$event->title}} -- Descrição do evento: {{$event->description}} </p>
@endforeach
@endsection