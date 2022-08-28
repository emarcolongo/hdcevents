@extends('aulas.main');
@section('title', 'Produtos')
@section('content')
    <span>Esta pagina possui um condicional caso seja informado um ID sera exibido</span>
    <br>
    <span>Caso contrario sera exibido uma mensagem</span>
    <br>
    <br>
    @if ($id <> null) 
        <span>Produto informado: {{ $id }}</span>
    @else
        <span>Produto nao informado</span>
    @endif
@endsection