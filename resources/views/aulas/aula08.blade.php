@extends('aulas.main')
@section('title', '#08 - Resgatando parametros de URL')
@section('content')
    <h4>#08 - Resgatando parametros de URL</h4>
    <span><strong>Aula: </strong></span><a href="https://www.youtube.com/watch?v=_sayRBbEHN8&list=PLnDvRpP8BnewYKI1n2chQrrR4EYiJKbUG&index=8" target="_blank">Video Aula</a><br><br>
    <span><strong>Discritivo:</strong> Parametros nas rotas</span><br>
    <ul>
        <li>Podemos mudar como uma view nos responde <strong>adicionando parametros a uma rota</strong></li>
        <li>Ao definir a rota devemos colocar o parametro desta maneira: <strong>{id}</strong></li>
        <li>Podemos ter <strong>parametros opcionais</strong> tambem, adicionando uma: '?', por exemplo {id?}</li>
        <li>O Laravel aceita tambem <strong>query parameters</strong>, utilizando a seguinte sintaxe: ?nome=Mattheus&idade=29</li>
    </ul>
    <h4>Exemplos de rotas</h4>
    <ul>
        <li><strong>Rota com ID obrigatorio</strong><br>
            <span>Route::get('/produtos/{id}', function($id) {</span><br>
            <span>    return view('produto',['id'=>$id]);</span><br>
            <span>});</span>
            <br>
            <a href="{{ url('/produto/4') }}">Exemplo</a>
        </li>
        <br>
        <li><strong>Rota com ID opcional (neste caso deve haver um valor default)</strong><br>
            <span>Route::get('/produtos/{id?}', function($id = null) {</span><br>
            <span>    return view('produtos',['id'=>$id]);</span><br>
            <span>});</span>
            <br>
            <a href="{{ url('/produtos/4') }}">Exemplo</a>
        </li>
        <br>
        <li><strong>Rota com query parameters</strong><br>
            <span>Route::get('/pesquisa', function () {</span><br>
            <span>$nome = request('nome');</span><br>
            <span>$idade = request('idade');</span><br>
            <span>return view('resource/pesquisa',['nome'=>$nome,'idade'=>$idade]);</span><br>
            <span>});</span><br>
            <a href="{{ url('/pesquisa?nome=Eduardo&idade=44') }}">Exemplo</a>
        </li>
    </ul>


    <hr style="width: 50%;text-align: left;margin-left:0">    
@endsection