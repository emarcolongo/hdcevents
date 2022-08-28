@extends('aulas.main')
@section('title', '#28 - Relacao Many-to-Many')
@section('content')
    <h4>#28 - Relacao Many-to-Many</h4>
    <span><strong>Aula: </strong></span><a href="https://www.youtube.com/watch?v=d1tk96cxZxk&list=PLnDvRpP8BnewYKI1n2chQrrR4EYiJKbUG&index=28" target="_blank">Video Aula</a><br><br>
    <span><strong>Discritivo:</strong> Relations(Many-to-Many)</span><br>
    <ul>
        <li>Vamos aprender uma nova relacao de registros pelo Laravel: <b>Many-to-Many</b></li>
        <li>Vamos aplicar esta <b>logica a participacao de eventos</b>, onde um usuario pode ter varios eventos e um evento varios participantes</li>
        <li>Precisaremos <b>criar uma nova tabela</b> que administra estas relacoes, seguindo tambem a convencao do Laravel</li>
    </ul>
@endsection