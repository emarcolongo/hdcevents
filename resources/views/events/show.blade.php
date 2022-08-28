@extends('layouts.main')
@section('title',$event->title)
@section('content')
    <div class="col-md-10 offset-md-1">
        <div class="row">
            <div id="image-container" class="col-md-6">    
                @if ($event->image)
                    <img src="/img/events/{{$event->image}}" alt="{{$event->title}}" class="img-fluid">    
                @else
                    <img src="/img/event_placeholder.jpg" alt="{{$event->title}}" class="img-fluid">    
                @endif        
            </div>
            <div id="info-container" class="col-md-6">
                <h1>{{$event->title}}</h1>
                <p class="event-date"><ion-icon name="calendar"></ion-icon> Data: {{ date('d/m/Y', strtotime($event->date)) }}</p>
                <p class="event-city"><ion-icon name="compass"></ion-icon> {{$event->city}}</p>
                <p class="event-participants"><ion-icon name="contact"></ion-icon> {{ count($event->users) }} Participantes</p>
                <p class="event-owner"><ion-icon name="star"></ion-icon> {{ $eventOwner['name'] }}</p>
                @if ($hasUserJoined == false)
                    <form action="/events/join/{{ $event->id }}" method="POST">
                        @csrf
                        <a href="#" class="btn btn-primary" id="event-submit" onclick="event.preventDefault(); this.closest('form').submit();">
                            <ion-icon name="checkmark-circle-outline"></ion-icon> Confirmar Presença
                        </a>
                    </form>
                @else
                    <p class="already-joined-msg">Voce ja esta participando deste evento</p>
                @endif
                <h3>Estrutura do Evento:</h3>
                <ul id="items-list">
                    @foreach ($event->items as $item)
                        <li><ion-icon name="play"></ion-icon> <span>{{ $item }}</span></li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="col-md-12" id="descritpion-container">
            <h3>Sobre o evento:</h3>
            <p class="event-description">{{$event->description}}</p>
        </div>
    </div>
@endsection