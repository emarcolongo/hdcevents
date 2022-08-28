@extends('aulas.main')
@section('title','#18 - Resgatando um registro do banco de dados')
@section('content')
    <h4>#18 - Resgatando um registro do banco de dados</h4>
    <span><strong>Aula: </strong></span><a href="https://www.youtube.com/watch?v=UF3bUQAIXu4&list=PLnDvRpP8BnewYKI1n2chQrrR4EYiJKbUG&index=18" target="_blank">Video Aula</a><br><br>
    <span><strong>Discritivo:</strong> Resgatando um registro</span><br>
    <ul>
        <li>Vamos aprender a resgatar <b>apenas um registro</b> pelo Eloquent</li>
        <li>Vamos utilizar o metodo <b>findOrFail</b></li>
        <li>Criaremos uma nova view e rota para esta funcao</li>
        <li>Esta tela tem a funcao de exibir todas as informacoes do enveto e tambem o botao de participar</li>
    </ul>
@endsection