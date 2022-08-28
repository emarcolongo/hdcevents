@extends('aulas.main')
@section('title', '#07 - Criando Layout com Blade')
@section('content')
    <h4>#07 - Criando Layout com Blade</h4>
    <span><strong>Aula: </strong></span><a href="https://www.youtube.com/watch?v=IZnJwybJhSU&list=PLnDvRpP8BnewYKI1n2chQrrR4EYiJKbUG&index=7" target="_blank">Video Aula</a><br><br>
    <span><strong>Discritivo:</strong> Layouts com Blade, adicionando Fontes e Bootstrap</span><br>
        <ul>
            <li>A funcionalidade de criar um layout permite o <strong>reaproveitamento de codigo</strong></li>
            <li>Por exemplo: podemos utilizar o <strong>mesmo header e footer</strong> em todas as paginas sem repetir codigo</li>
            <li>Mas o layout do blade nao se limita a isso, podemos criar secoes do site por meio do layout e tambem mudar o title da pagina</li>
        </ul>
        <p><strong>Observacao:</strong> No curso a pagina principal foi alterada para suportar o layout, porem optei por manter separado para ficar mais
            evidente as modificacoes, entao temos o mesmo layout em welcome.blade.php e em layouts\main.blade.php
        </p>
        <p>A partir deste momento os demais arquivos de aula farao uso deste layout section</p>
        <hr style="width: 50%;text-align: left;margin-left:0">
@endsection