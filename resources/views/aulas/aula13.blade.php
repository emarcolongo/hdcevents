@extends('aulas.main')
@section('title', '#13 - Utilizando o Eloquent do Laravel')
@section('content')
    <h4>#13 - Utilizando o Eloquent do Laravel</h4>
    <span><strong>Aula: </strong></span><a href="https://www.youtube.com/watch?v=Q0GYYxgdWno&list=PLnDvRpP8BnewYKI1n2chQrrR4EYiJKbUG&index=13" target="_blank">Video Aula</a><br><br>
    <span><strong>Discritivo:</strong> Conceitos basicos do Eloquent</span><br>
    <ul>
        <li>Eloquent é a <b>ORM</b> do Laravel</li>
        <li>Cada tabela tem um <b>Model</b> que é responsável pela interação entre as requisições ao banco</li>
        <li>A convenção para o Model é o nome da entidade em singular enquanto o nome da tabela no banco é no plural</li>
        <li>No Model faremos poucas alterações dos arquivos, geralmente <b>configurações específicas</b></li>
    </ul>
    <br>

    <b>Retornando registros da tabela Events</b><br>
    @foreach ($events as $event)
        <span>{{ $event->title }} : {{ $event->description }}</span><br>
    @endforeach
@endsection