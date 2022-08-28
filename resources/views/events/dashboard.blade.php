@extends('layouts.main')
@section('title','Dashboard')
@section('content')
    <div class="col-md-10 offset-md-1 dashboard-title-container">
        <h1>Meus Eventos</h1>
    </div>    
    <div class="col-md-10 offset-md-1 dashboard-events-container">
        @if (count($events) > 0)
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Participantes</th>
                        <th scope="col">Acoes</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($events as $event)
                        <tr>
                            <td scope="row">{{ $loop->index + 1 }}</td>
                            <td scope="row"><a href="/events/{{ $event->id }}"> {{ $event->title }}</a></td>
                            <td scope="row">{{ count($event->users) }}</td>
                            <td scope="row">
                                <a href="/events/edit/{{ $event->id }}" class="btn btn-info edit-btn"><ion-icon name="create"></ion-icon> Alterar</a>
                                <form action="/events/{{ $event->id }}" method="POST">
                                    @csrf
                                    @method("DELETE")
                                    <button type="submit" class="btn btn-danger delete-btn"><ion-icon name="trash"></ion-icon> Excluir</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>Voce ainda nao tem eventos. <a href="/events/create">criar eventos</a></p>
        @endif
    </div>

    <div class="col-md-10 offset-md-1 dashboard-title-container">
        <h1>Eventos que Participo</h1>
    </div>    
    @if (count($eventsAsParticipant) > 0)
        <div class="col-md-10 offset-md-1 dashboard-events-container">    
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Participantes</th>
                        <th scope="col">Acoes</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($eventsAsParticipant as $event)
                        <tr>
                            <td scope="row">{{ $loop->index + 1 }}</td>
                            <td scope="row"><a href="/events/{{ $event->id }}"> {{ $event->title }}</a></td>
                            <td scope="row">{{ count($event->users) }}</td>
                            <td scope="row">
                                <form action="/events/leave/{{ $event->id }}" method="POST">
                                    @csrf
                                    @method("DELETE")
                                    <button type="submit" class="btn btn-danger delete-btn">
                                        <ion-icon name="trash"></ion-icon> Sair do Evento
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>    
        </div>    
    @else
        <div class="col-md-10 offset-md-1 dashboard-events-container">    
            <p>Voce ainda nao participa de nenhum evento. <a href="/">Clique aqui para participar</a></p>
        </div>
    @endif

@endsection