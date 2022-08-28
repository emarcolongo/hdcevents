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
            <h4>#06 - Adicionando Arquivos Estaticos</h4>
            <span><strong>Aula: </strong></span><a href="https://www.youtube.com/watch?v=Bn1nrr7HPkc&list=PLnDvRpP8BnewYKI1n2chQrrR4EYiJKbUG&index=6" target="_blank">Video Aula</a><br><br>
            <span><strong>Discritivo:</strong> Criando pasta CSS, JS e IMG na estrutura "Public"</span>
            <ul>
                <li>Uma aplicacao Web normalmente tem arquivos <strong>CSS</strong>,<strong>JS</strong> e <strong>Imagens</strong></li>
                <li>O <strong>Lavarevel</strong> proporciona uma <strong>maneira muito facil de inserir estes arquivos</strong> nos projetos</li>
                <li>Todos os recursos ficam na pasta <strong>public</strong>, e tem acesso direto nas tags que trabalham com arquivos estaticos</li>
            </ul>
            <h4>Teste de Arquivo CSS</h4>
            <img src="/img/hdcevents_logo.svg" alt="">
            <hr style="width: 50%;text-align: left;margin-left:0">
        </div>
    </body>
</html>
