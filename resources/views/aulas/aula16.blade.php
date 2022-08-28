@extends('aulas.main')
@section('title', '#16 - Conhecendo as Flash Messages')
@section('content')
    <h4>#16 - Conhecendo as Flash Messages</h4>
    <span><strong>Aula: </strong></span><a href="https://www.youtube.com/watch?v=EuzEbibqqew&list=PLnDvRpP8BnewYKI1n2chQrrR4EYiJKbUG&index=16" target="_blank">Video Aula</a><br><br>
    <span><strong>Discritivo:</strong> Flash Messages</span><br>
    <ul>
        <li>Podemos adicionar mensagens ao usuario por <b>session</b></li>
        <li>Estas mensagens sao conhecidas por <b>flash messages</b></li>
        <li>Podemos adicionar com o metodo <b>with</b> nos Controllers</li>
        <li>Utilizadas para apresentar um feedback ao usuario</li>
        <li>No blade podemos verificar a presenca da mensagem pela diretiva <b>'@session'</b></li>
    </ul>
@endsection