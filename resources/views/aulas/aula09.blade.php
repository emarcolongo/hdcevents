@extends('aulas.main')
@section('title', '#09 - Controllers')
@section('content')
    <h4>#09 - Controllers</h4>
    <span><strong>Aula: </strong></span><a href="https://www.youtube.com/watch?v=O0enF2nVBNE&list=PLnDvRpP8BnewYKI1n2chQrrR4EYiJKbUG&index=9" target="_blank">Video Aula</a><br><br>
    <span><strong>Discritivo:</strong> Definicoes de Controllers</span><br>
    <ul>
        <li>Os <strong>Controllers</strong> sao parte fundamental de toda aplicacao em Laravel</li>
        <li>Geralmente condesam a maior parte da logica</li>
        <li>Tem o papel de <strong>enviar e esperar a resposta do banco de dados</strong></li>
        <li>E tambem <strong>receber e enviar alguma resposta para as views</strong></li>
        <li>Os Controllers podem ser criados via <strong>artisan</strong></li>
        <li>E comum retornar uma view ou redirecionar para uma URL pelo controller</li>
    </ul>
    <span>Nesta aula o objetivo e criar controllers para redirecionar as views</span><br>
    <span>Podemos criar os controllers diretamente pelo <strong>artisan</strong> usando o comando abaixo:</span><br>
    <span><strong>php artisan make:controller NomeController</strong></span>
    
    <br>
    <br>
    <span style="color: navy">A partir desta aula utilizarei o AulaController para redirecionar esta e as demais aulas existentes</span>

    <br>
    <br>
    <span>Nesta aula foi adicionado ao layouts.main o IonIcons ( <a href="https://ionic.io/ionicons/v4/usage" target="_blank">https://ionic.io/ionicons/v4/usage</a> )</span>

@endsection