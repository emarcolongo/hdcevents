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
            <h4>#04 - Conhecendo o Blade</h4>
            <span><strong>Aula: </strong></span><a href="https://www.youtube.com/watch?v=1EkYvhCL3BA&list=PLnDvRpP8BnewYKI1n2chQrrR4EYiJKbUG&index=4" target="_blank">Video Aula</a><br><br>
            <span><strong>Discritivo:</strong> Teste de Condicao em Blade - 10 > 5</span>
            @if (10 > 5) 
                <p>Variavel recebida pelo blade. Nome da Aplicacao: {{  $appName }}</p>
                <span>Versao: {{ $versao  }}</span>
            @else
                <p>Este texto nao ira aparecer</p>
            @endif
            <hr style="width: 50%;text-align: left;margin-left:0">
        </div>
    </body>
</html>
