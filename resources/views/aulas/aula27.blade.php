@extends('aulas.main')
@section('title', '#27 - Atualizacao de Dados (CRUD: Update)')
@section('content')
    <h4>#27 - Atualizacao de Dados (CRUD: Update)</h4>
    <span><strong>Aula: </strong></span><a href="https://www.youtube.com/watch?v=-3gt4zqV11k&list=PLnDvRpP8BnewYKI1n2chQrrR4EYiJKbUG&index=27" target="_blank">Video Aula</a><br><br>
    <span><strong>Discritivo:</strong> Editando Eventos</span><br>
    <ul>
        <li>Vamos fazer a logica para <b>editar um registro</b></li>
        <li>Precisaremos criar uma <b>nova rota e tambem uma nova view</b> que mostra o form com os dados preenchidos</li>
        <li>Alem disso sera necessario aplicar um outro verbo HTTP: o <b>PUT</b></li>
        <li>E persistir todas a alteracoes por meio de uma action no nosso <b>Controller</b></li>
    </ul>

    <span><b>Notas:</b> Existem formas de aproveitar o mesmo arquivo blade para o <b>create</b> e para o <b>edit</b> mas neste curso vamos repetir os codigos</span>
@endsection