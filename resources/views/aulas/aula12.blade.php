@extends('aulas.main')
@section('title', '#12 - Avancando em migrations do Laravel')
@section('content')
    <h4>#12 - Avancando em migrations do Laravel</h4>
    <span><strong>Aula: </strong></span><a href="https://www.youtube.com/watch?v=QYT_Hy0Mx2Q&list=PLnDvRpP8BnewYKI1n2chQrrR4EYiJKbUG&index=12" target="_blank">Video Aula</a><br><br>
    <span><strong>Discritivo:</strong> +Detalhes sobre Migrations</span><br>
    <ul>
        <li>Quando precisamos adicionar um novo campo a uma tabela, <strong>devemos criar uma nova migration</strong></li>
        <li>Porem devemos <strong>tomar cuidado</strong> para nao rodar o comando <strong>fresh</strong>, e apagar todos os dados existentes</li>
        <li>O comando <strong>rollback</strong> pode ser utilizado para voltar uma migration</li>
        <li>Para voltar todas podemos utilizar o comando <strong>reset</strong></li>
        <li>Para voltar todas e rodar o migrate novamente utilizamos o <strong>refresh</strong></li>
    </ul>
    <br>
@endsection