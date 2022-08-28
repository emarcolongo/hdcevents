@extends('aulas.main')
@section('title', '#19 - Salvando JSON no banco de dados')
@section('content')
    <h4>#19 - Salvando JSON no banco de dados</h4>
    <span><strong>Aula: </strong></span><a href="https://www.youtube.com/watch?v=ycKUWSTveXo&list=PLnDvRpP8BnewYKI1n2chQrrR4EYiJKbUG&index=19" target="_blank">Video Aula</a><br><br>
    <span><strong>Discritivo:</strong> Salvando JSON</span><br>
    <ul>
        <li>Podemos salvar um conjunto de dados no banco por <b>itens de multipla escolha</b></li>
        <li>Vamos criar um campo determinado de <b>json</b> via migrations</li>
        <li>No front-end podemos utilizar <b>inputs com checkbox</b></li>
        <li>Apos envio para o controller, apenas recebemos do request os itens e o resto do processo e igual ao dos outros dados do nosso Model</li>
    </ul>
    <span>Caso apareca o erro:</span><br>
    <span style="color: red">Facade\Ignition\IgnitionServiceProvider</span><br><br>
    <ul>
        <li>Go to the application directory</li>
        <li>Run <b>composer install</b></li>
        <li>Run <b>composer dump-autoload</b></li>
        <li>Run <b>php artisan migrate</b></li>
    </ul>
    <span>Fonte: <a href="https://stackoverflow.com/questions/58087153/laravel-with-app-engine-standard-class-facade-ignition-ignitionserviceprovider" target="_blank">stack overflow</a></span><br><br>

    <span><b>Nota:</b> para o Laravel entender o formato de JSON devemos adicionar no Model um cast (<b>protected $casts = ['items'=>'array'];</b>)</span>
@endsection