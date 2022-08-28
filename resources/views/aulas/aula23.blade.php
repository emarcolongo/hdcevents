@extends('aulas.main')
@section('title','#23 - Relacao One-to-Many')
@section('content')
    <h4>#23 - Relacao One-to-Many</h4>
    <span><strong>Aula: </strong></span><a href="https://www.youtube.com/watch?v=BtOAqNYo9Pg&list=PLnDvRpP8BnewYKI1n2chQrrR4EYiJKbUG&index=23" target="_blank">Video Aula</a><br><br>
    <span><strong>Discritivo:</strong> </span><br>
    <ul>
        <li>Relacoes sao essenciais para sistemas de <b>banco de dados relacionais</b></li>
        <li>Vamos criar uma relacao de <b>um para muitos</b>, entre usuarios e eventos</li>
        <li>Isto tornara <b>um usuario dono de um evento</b>, e tambem a possibilidade dele possuir varios eventos</li>
        <li>Precisaremos alterar as migrations, adicionando uma chave estrangeira no model <b>Event</b></li>
    </ul>   
    <span><b>Notas:</b> Adicionamos tambem um <b>middleware</b> na <b>Route</b> de "Criar Eventos" para que um usuario nao cadastrado seja redirecionado a pagina de login antes de criar um evento</span> 
@endsection