@extends('layouts.main')
@section('title', 'Criar Eventos')
@section('content')
    <div id="event-create-container" class="col-md-6 offset-md-3">
        <h1>Crie seu Evento</h1>
        <form action="/events" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="image">Imagem do Evento:</label>
                <input type="file" class="form-control-file" id="image" name="image">
            </div> 
            <div class="form-group">
                <label for="title">Evento:</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Nome do Evento">
            </div> 
            <div class="form-group">
                <label for="date">Data:</label>
                <input type="date" class="form-control" id="date" name="date">
            </div> 
            <div class="form-group">
                <label for="city">Cidade:</label>
                <input type="text" class="form-control" id="city" name="city" placeholder="Local do Evento">
            </div> 
            <div class="form-group">
                <label for="private">Evento Privado:</label>
                <select name="private" id="private" class="form-control">
                    <option value="0">Nao</option>
                    <option value="1">Sim</option>
                </select>
            </div> 
            <div class="form-group">
                <label for="description">Descricao:</label>
                <textarea name="description" id="description" class="form-control" placeholder="Informe a detalhes do evento"></textarea>
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
            <input type="submit" value="Criar Evento" class="btn btn-primary">
        </form>
    </div>
@endsection