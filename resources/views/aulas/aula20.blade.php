@extends('aulas.main')
@section('title', '#20 - Salvando Datas no banco de dados')
@section('content')
    <h4>#20 - Salvando Datas no banco de dados</h4>
    <span><strong>Aula: </strong></span><a href="https://www.youtube.com/watch?v=7rrFP1LUhQI&list=PLnDvRpP8BnewYKI1n2chQrrR4EYiJKbUG&index=20" target="_blank">Video Aula</a><br><br>
    <span><strong>Discritivo: Salvando Datas</strong> </span><br>
    <ul>
        <li>Para salvar datas no Laravel e muito facil, precisamos criar um <b>input do tipo date</b> na nossa view</li>
        <li>Um campo de <b>dateTime</b> via migrations</li>
        <li>E processar o envio dos dados via Controller pelo request de Post</li>
    </ul>    

    <span><b>Nota:</b> No Model e necessario incluir: (<b>protected $dates = ['date'];</b>)</span>
@endsection