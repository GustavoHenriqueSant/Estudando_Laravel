<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        
    </head>
    <body>
        <h1>Título aqui</h1>

        @if(22 < 50)
            <p> A condição é true</p>
            <p> isso ai cara </p>
        @else
            <p>Aí não cara</p>
        @endif

        @if($nome == 'Gustavo')
            <p>Olá {{$nome}}</p>
        @endif

        @for($i = 0; $i < count($vetor); $i++)
            <p>{{$vetor[$i]}}</p>
        @endfor

        @foreach($nomes as $nome)
            <p>{{$loop->index}}:{{$nome}}</p>
        @endforeach

        @php
            $nome = "Gustavo";
            echo $nome;
        @endphp

        <!-- Comentário HTML -->
        {{-- Este é o comentário do Blade. --}}
    </body>
</html>
