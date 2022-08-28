@extends('aulas.main')
@section('title', 'Pesquisa')
@section('content')
    @if ($nome != '') 
        <span>Nome: {{ $nome }}</span><br>
    @endif
    @if ($idade != '') 
        <span>Idade: {{ $idade }}</span><br>
    @endif
@endsection