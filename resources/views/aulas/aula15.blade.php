@extends('aulas.main')
@section('title', '#15 - Salvando dados no banco MySQL')
@section('content')
    <h4>#15 - Salvando dados no banco MySQL</h4>
    <span><strong>Aula: </strong></span><a href="https://www.youtube.com/watch?v=z1ISAp7sYwo&list=PLnDvRpP8BnewYKI1n2chQrrR4EYiJKbUG&index=15" target="_blank">Video Aula</a><br><br>
    <span><strong>Discritivo:</strong> Adicionado o registro no banco</span><br>
    <ul>
        <li>No Laravel e comum ter uma action especifica para o post chamada de <b>store</b></li>
        <li>Nesta chamada <b>store</b> vamos criar o objeto e compor ele com base nos dados enviados pelo <b>POST</b></li>
        <li>Com o objeto formado utilizamos o metodo <b>save</b> para persistir os dados</li>
    </ul>

    <span>Nesta aula criamos o form e css da pagina events.create.blade.php alem das logicas para a Route e Controller</span>
@endsection