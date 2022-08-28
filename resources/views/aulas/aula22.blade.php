@extends('aulas.main')
@section('title', '#22 - Autenticacao no Laravel (registro e login)')
@section('content')
    <h4>#22 - Autenticacao no Laravel (registro e login)</h4>
    <span><strong>Aula: </strong></span><a href="https://www.youtube.com/watch?v=xFi5lC4QRZQ&list=PLnDvRpP8BnewYKI1n2chQrrR4EYiJKbUG&index=22" target="_blank">Video Aula</a><br><br>
    <span><strong>Discritivo:</strong> JetStream</span><br>
    <ul>
        <li>Podemos utilizar o <b>JetStream</b> para aplicar uma autenticacao de modo rapido na nossa aplicacao</li>
        <li>Primeiramente devemos instalar o pacote via Composer</li>
        <li>Depois devemos instalar o <b>Liveware</b>, que sao componentes para autenticacao para o Blade</li>
        <li>E por fim rodamos as migrations</li>
    </ul>    

    <span><b>Notas:</b></span><br>
    <ul>
        <li>E <b>aconselhavel</b> fazer a instalacao do JetStream utilizando este <a href="https://jetstream.laravel.com/2.x/installation.html" target="_blank">link oficial</a></li>
        <li>Caso tenha problemas com a apresentacao do estilo consulte: <a href="https://stackoverflow.com/questions/65213337/css-does-not-load-in-laravel-8-jetstream-on-xampp" target="_blank">Stack Overflow</a></li>
    </ul>
@endsection