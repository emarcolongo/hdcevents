<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="/css/style.css">
        <script src="/js/scripts.js"></script>
    </head>
    <body class="antialiased">
        <div>
            <a href="{{ url('/') }}" class="text-sm text-red-700 dark:text-red-500 underline">Home</a> | 
            <a href="{{ url('/aulas') }}" class="text-sm text-red-700 dark:text-red-500 underline">Indice de Aulas</a> | 
            <h4>#02 - Instalando o Laravel</h4>
            <span><strong>Aula: </strong></span><a href="https://www.youtube.com/watch?v=4OxYHiEkqBg&list=PLnDvRpP8BnewYKI1n2chQrrR4EYiJKbUG&index=2" target="_blank">Video Aula</a><br><br>
            <span><strong>Discritivo:</strong> Instalando o Laravel e criando a pasta do Projeto</span><br>
            <br>
            <span><strong>O que e Laravel ?</strong></span><br>
            <ul>
                <li>Framework construido na linguagem <strong>PHP</strong></li>
                <li>Utiliza a arquitetura <strong>MVC</strong> (Model, View, Controller)</li>
                <li>Possui recursos muito interessantes que auxiliam o desenvolvimento de aplicacoes: <strong>artisan</strong>, <strong>migrations</strong>,
                    <strong>blade</strong> e etc...</li>
                <li>Facil de criar codigo, nao e tao burocratico e flexibiliza bastante no desenvolvimento de aplicacoes</li>
                <li>A estrutura de pastas e simples, deixando o projeto organizado</li>
            </ul>
            <br>
            <span>comando para criacao do projeto:</span><br>
            <span>composer create-project laravel/laravel hdcevents --prefer-dist "8.*"</span>
            <br>
            <br>
            <hr style="width: 50%;text-align: left;margin-left:0">
        </div>
    </body>
</html>
