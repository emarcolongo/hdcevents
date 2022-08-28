@extends('aulas.main')
@section('title','#24 - Exibindo dados de Usuarios na View')
@section('content')
    <h4>#24 - Exibindo dados de Usuarios na View</h4>
    <span><strong>Aula: </strong></span><a href="https://www.youtube.com/watch?v=5XvlwCzrQ60&list=PLnDvRpP8BnewYKI1n2chQrrR4EYiJKbUG&index=24" target="_blank">Video Aula</a><br><br>
    <span><strong>Discritivo:</strong> Exibindo Nome do Usuario na View</span><br>
    <ul>
        <li>Vamos modificar nossa view <b>events.show</b> para exibir o nome do usuario que criou o evento</li>
        <li>Para isto vamos primeiramente modificar nosso <b>Controller Events</b> para trazer os dados do usuario que criou o evento</li>
    </ul>   
@endsection