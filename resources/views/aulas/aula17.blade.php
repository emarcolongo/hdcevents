@extends('aulas.main')
@section('title','#17 - Upload de imagens com Laravel')
@section('content')
    <h4>#17 - Upload de imagens com Laravel</h4>
    <span><strong>Aula: </strong></span><a href="https://www.youtube.com/watch?v=5J8ammjVcCo&list=PLnDvRpP8BnewYKI1n2chQrrR4EYiJKbUG&index=17" target="_blank">Video Aula</a><br><br>
    <span><strong>Discritivo:</strong> Salvando imagem no Laravel</span><br>
    <ul>
        <li>Para fazer upload de imagens precisamos mudar o <b>enctype</b> do form e tambem <b>criar um input</b> de envio das mesmas</li>
        <li>No Controller vamos fazer um <b>tratamento de verificação da iamgem</b> que foi enviada</li>
        <li>E depois vamos salvar ela com um <b>nome unico</b> em um diretorio do projeto</li>
        <li>No banco salvamos apenas o <b>path</b> para a imagem</li>
    </ul>
@endsection