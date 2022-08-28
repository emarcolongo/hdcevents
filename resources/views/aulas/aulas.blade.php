@extends('aulas.main')
@section('title', 'HDC Events - Aulas')
@section('content')
    <a href="https://github.com/matheusbattisti/curso_laravel/">Github do Curso</a><br><br>
    <h4>Indice de Aulas:</h4>
    <ul>
        <li><a class="nav-link" href="{{ url('/aula/1') }}">#01 - Introducao</a></li>
        <li><a class="nav-link" href="{{ url('/aula/2') }}">#02 - Instalando o Laravel</a></li>
        <li><a class="nav-link" href="{{ url('/aula/3') }}">#03 - Rotas e Views</a></li>
        <li><a class="nav-link" href="{{ url('/aula/4') }}">#04 - Conhecendo o Blade</a></li>
        <li><a class="nav-link" href="{{ url('/aula/5') }}">#05 - Avancando no template engine Blade (loop)</a></li>
        <li><a class="nav-link" href="{{ url('/aula/6') }}">#06 - Adicionando Arquivos Estaticos</a></li>
        <li><a class="nav-link" href="{{ url('/aulas/07') }}">#07 - Criando Layout com Blade</a></li>
        <li><a class="nav-link" href="{{ url('/aulas/08') }}">#08 - Resgatando parametros de URL</a></li>
        <li><a class="nav-link" href="{{ url('/aulas/09') }}">#09 - Controllers</a></li>
        <li><a class="nav-link" href="{{ url('/aulas/10') }}">#10 - Conexao com o Banco de Dados MySQL</a></li>
        <li><a class="nav-link" href="{{ url('/aulas/11') }}">#11 - Introducao a migrations do Laravel</a></li>
        <li><a class="nav-link" href="{{ url('/aulas/12') }}">#12 - Avancando em migrations do Laravel</a></li>
        <li><a class="nav-link" href="{{ url('/aulas/13') }}">#13 - Utilizando o Eloquent do Laravel</a></li>
        <li><a class="nav-link" href="{{ url('/aulas/14') }}">#14 - Finalizando a Home</a></li>
        <li><a class="nav-link" href="{{ url('/aulas/15') }}">#15 - Salvando dados no banco MySQL</a></li>
        <li><a class="nav-link" href="{{ url('/aulas/16') }}">#16 - Conhecendo as Flash Messages</a></li>
        <li><a class="nav-link" href="{{ url('/aulas/17') }}">#17 - Upload de imagens com Laravel</a></li>
        <li><a class="nav-link" href="{{ url('/aulas/18') }}">#18 - Resgatando um registro do banco de dados</a></li>
        <li><a class="nav-link" href="{{ url('/aulas/19') }}">#19 - Salvando JSON no banco de dados</a></li>
        <li><a class="nav-link" href="{{ url('/aulas/20') }}">#20 - Salvando Datas no banco de dados</a></li>
        <li><a class="nav-link" href="{{ url('/aulas/21') }}">#21 - Busca no Laravel</a></li>
        <li><a class="nav-link" href="{{ url('/aulas/22') }}">#22 - Autenticacao no Laravel (registro e login)</a></li>
        <li><a class="nav-link" href="{{ url('/aulas/23') }}">#23 - Relacao One-to-Many</a></li>
        <li><a class="nav-link" href="{{ url('/aulas/24') }}">#24 - Exibindo dados de usuario na View</a></li>
        <li><a class="nav-link" href="{{ url('/aulas/25') }}">#25 - Criando uma Dashboard</a></li>
        <li><a class="nav-link" href="{{ url('/aulas/26') }}">#26 - Deletando dados (CRUD: Delete)</a></li>
        <li><a class="nav-link" href="{{ url('/aulas/27') }}">#27 - Atualizando dados (CRUD: Update)</a></li>
        <li><a class="nav-link" href="{{ url('/aulas/28') }}">#28 - Relacao Many-to-Many</a></li>
        <li><a class="nav-link" href="{{ url('/aulas/29') }}">#29 - Exibindo eventos do usuario</a></li>
        <li><a class="nav-link" href="{{ url('/aulas/30') }}">#30 - Removendo presenca do evento</a></li>
        <li><a class="nav-link" href="{{ url('/aulas/31') }}">#31 - Conclusao</a></li>
    </ul>
@endsection