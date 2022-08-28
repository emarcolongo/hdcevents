@extends('layouts.main')
@section('title', 'HDC Events')
@section('content')
    <div id="search-container" class="col-md-12">
        <h1>Busque um evento</h1>
        <form action="/" method="GET">
            <input type="text" id="search" name="search" class="form-control" placeholder="Procurar...">
        </form>
    </div>
    <div id="events-container" class="col-md-12">
        @if ($search)
            <h2>Buscando por: {{ $search }}</h2>
        @else
            <h2>Proximos Eventos</h2>            
        @endif
        
        @if (count($events))
            @if ($search)
                <span>Eventos localizados: {{ count($events) }}</span>
            @endif
            <p class="subtitle">Veja os eventos dos proximos dias:</p>
            <div id="cards-container" class="row">
                @foreach($events as $event)
                    <div class="card col-md-3">
                        @if ($event->image)
                            <img src="/img/events/{{ $event->image }}" alt="{{ $event->title }}">    
                        @else
                            <img src="/img/event_placeholder.jpg" alt="{{ $event->title }}">
                        @endif
                        <div class="card-body">
                            <p class="card-date">{{  date('d/m/Y', strtotime($event->date)) }}</p>
                            <h5 class="card-title">{{ $event->title }}</h5>
                            <p class="card-participants">{{ count($event->users) }} Participantes</p>
                            <a href="/events/{{ $event->id }}" class="btn btn-primary">Saber mais</a>
                        </div>
                    </div>
                @endforeach
            </div>
        @else
            @if ($search)
                <span>Nao foi possivel encontrar nenhum evento com: {{ $search }} !</span><br>
                <a href="/">Ver todos</a>
            @else
                <p>Nao ha eventos disponiveis</p>                
            @endif    
        
        @endif
    </div>
@endsection