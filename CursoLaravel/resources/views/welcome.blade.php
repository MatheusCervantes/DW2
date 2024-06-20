@extends('layouts.main')

@section('title', 'HDC Events')

@section('content')

<h1>Algum título</h1>
<img src="/img/banner.jpg" alt="Banner">
@if(10>5)
<p>A condição é true</p>
@endif

<p>{{$nome}}</p>

@if($nome == "Pedro")
<p>O nome é pedro</p>
@elseif($nome == "Matheus")
<p>O Nome é {{$nome}} e ele tem {{$idade}}, trabalho como: {{$profissao}}</p>
@else
<p>O nome não é Pedro</p>
@endif

@for($i=0; $i < count($arr); $i++) <p> {{$arr[$i]}} </p>
    @if ($i == 2)
    <p> i é 2</p>
    @endif
    @endfor

    @foreach($nomes as $nome)
    <p>{{$loop->index}}</p>
    <p>{{$nome}}</p>
    @endforeach

    @php
    echo "dadada";
    @endphp


    <!-- Comentário em HTML -->
    {{-- Comentário em BLADE --}}
    {{-- Comentário em Teste --}}
    
    @endsection
