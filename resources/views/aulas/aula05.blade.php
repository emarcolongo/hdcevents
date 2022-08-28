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
            <h4>#05 - Avancando no template engine Blade (loop)</h4>
            <span><strong>Aula: </strong></span><a href="https://www.youtube.com/watch?v=on9bdYegRgc&list=PLnDvRpP8BnewYKI1n2chQrrR4EYiJKbUG&index=5" target="_blank">Video Aula</a><br><br>
            <span><strong>Discritivo:</strong> Comentarios HTML no Inspecionar, For e Diretiva PHP</span><br>
            <br>
            @for ($i=0; $i < count($familia); $i++)
                <span>{{ ($i+1) }} {{ $familia[$i] }}</span><br>
            @endfor
            @php
                $nome = "Eduardo Miguez Marcolongo";
                echo "Diretiva PHP: " . $nome . "<br>" . "Data Atual: " . date("d/m/Y");
            @endphp
            <!-- Comentario HTML devera aparecer sempre ao inspecionar -->
            {{-- Comentario Blade nao devera aparecer ao inspecionar --}}
            <hr style="width: 50%;text-align: left;margin-left:0">
        </div>
    </body>
</html>
