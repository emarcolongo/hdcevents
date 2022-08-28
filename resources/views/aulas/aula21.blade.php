@extends('aulas.main')
@section('title', '#21 - Busca no Laravel')
@section('content')
    <h4>#21 - Busca no Laravel</h4>
    <span><strong>Aula: </strong></span><a href="https://www.youtube.com/watch?v=aXCrVNIuGE0&list=PLnDvRpP8BnewYKI1n2chQrrR4EYiJKbUG&index=21" target="_blank">Video Aula</a><br><br>
    <span><strong>Discritivo: Busca no Laravel</strong> </span><br>
    <ul>
        <li>Para criar uma busca no Laravel e muito simples, vamos utilizar o <b>Eloquent</b></li>
        <li>O metodo <b>where</b> vai identificar os registros que precisamos, <b>fazendo um filtro e nos enviando para a view</b></li>
        <li>Podemos fazer a exibicao da busca na propria Home, mudando o layout com <b>diretivas Blade</b></li>
    </ul>    
@endsection