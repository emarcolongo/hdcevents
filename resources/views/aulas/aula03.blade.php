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
            <h4>#03 - Rotas e Views</h4>
            <span><strong>Aula: </strong></span><a href="https://www.youtube.com/watch?v=AEC7o2T0k3Y&list=PLnDvRpP8BnewYKI1n2chQrrR4EYiJKbUG&index=3" target="_blank">Video Aula</a><br><br>
            <span><strong>Discritivo:</strong> O que sao Rotas e Views</span><br>
            <ul>
                <li>Vamos acessar as paginas do nosso projeto por meio de <strong>rotas</strong></li>
                <li>As rotas chamam as <strong>views</strong>, que sao representacoes graficas das paginas</li>
                <li>Nas views teremos os <strong>templates</strong>, onde ha a estruturacao da pagina por meio do HTML</li>
                <li>Os templates tambem renderizam <strong>dados dinamicos</strong> por meio de PHP</li>
            </ul>
            <br>
            <hr style="width: 50%;text-align: left;margin-left:0">
        </div>
    </body>
</html>
