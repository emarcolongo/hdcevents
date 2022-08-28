@extends('layouts.main')
@section('title', 'Alterando: ' . $event->title)
@section('content')
    <div id="event-create-container" class="col-md-6 offset-md-3">
        <h1>Alterando Evento: {{ $event->title }}</h1>
        <form action="/events/update/{{ $event->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method("PUT")
            <div class="form-group">
                <label for="image">Imagem do Evento:</label>
                <input type="file" class="form-control-file" id="image" name="image">
                <img src="/img/events/{{ $event->image }}" alt="{{ $event->title }}" class="img-preview">
            </div> 
            <div class="form-group">
                <label for="title">Evento:</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Nome do Evento" value="{{ $event->title }}">
            </div> 
            <div class="form-group">
                <label for="date">Data:</label>
                <input type="date" class="form-control" id="date" name="date" value="{{ $event->date->format('Y-m-d') }}">
            </div> 
            <div class="form-group">
                <label for="city">Cidade:</label>
                <input type="text" class="form-control" id="city" name="city" placeholder="Local do Evento" value="{{ $event->city }}">
            </div> 
            <div class="form-group">
                <label for="private">Evento Privado:</label>
                <select name="private" id="private" class="form-control">
                    <option value="0">Nao</option>
                    <option value="1" {{ $event->private == 1 ? "selected='selected'" : "" }}>Sim</option>
                </select>
            </div> 
            <div class="form-group">
                <label for="description">Descricao:</label>
                <textarea name="description" id="description" class="form-control" placeholder="Informe a detalhes do evento"> {{ $event->description }}</textarea>
            </div> 
            <div class="form-group">
                <label for="">Itens disponiveis no evento:</label>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Brindes"> Brindes
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Coffe Break"> Coffe Break
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Palco"> Palco
                </div>
                <div class="form-group">
                    <input type="checkbox" name="items[]" value="Tradutores"> Tradutores
                </div>
            </div>
            <input type="submit" value="Alterar Evento" class="btn btn-primary">
        </form>
    </div>
@endsection