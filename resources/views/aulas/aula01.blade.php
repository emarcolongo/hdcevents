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
            <h4>#01 - Introducao</h4>
            <span><strong>Aula: </strong></span><a href="https://www.youtube.com/watch?v=qH7rsZBENJo&list=PLnDvRpP8BnewYKI1n2chQrrR4EYiJKbUG&index=1" target="_blank">Video Aula</a><br><br>
            <span><strong>Discritivo:</strong> Conhecendo o Laravel</span><br>
            <br>
            <hr style="width: 50%;text-align: left;margin-left:0">
        </div>
    </body>
</html>
