@extends('layouts.main')

@section('title', 'Criar Evento')

@section('content')

    <div id="event-create-container" class="col-md-6  offset-md-3">
        <h1>Crie o seu evento</h1>

        <form action="/events" method="POST" enctype="multipart/form-data">

            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="form-group">
                <label for="title">Evento:</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Nome do Evento">
            </div>
            <br>
            <div class="form-group">
                <label for="date">Data do evento:</label>
                <input type="date" class="form-control" id="date" name="date">
            </div>
            <br>
            <div class="form-group">
                <label for="city">Cidade:</label>
                <input type="text" class="form-control" id="city" name="city" placeholder="Local do Evento">
            </div>
            <br>
            <div class="form-group">
                <label for="description">Descrição:</label>
                <textarea name="description" id="description" class="form-control" placeholder="O que vai acontecer no evento"></textarea>
            </div>
            <br>
            <div class="form-group">
                <label for="private">O evento é privado?:</label>
                <select name="private" id="private" class="form-control">
                    <option value="0">Não</option>
                    <option value="1">Sim</option>
                </select>
            </div>
            <br>
            <div class="form-group">
                <label for="image">Imagem do Evento:</label>
                <input type="file" id="image" name="image" class="form-control-file">
            </div>
            <br>
            <div class="form-group space">
                <label for="items">Adicione itens de infraestrutura:</label>
                <div class="form-group">
                    <input type="checkbox" id="chairs" name="items[]" value="Cadeiras">
                    <label for="chairs"><span></span>Cadeiras</label>
                </div>
                <div class="form-group">
                    <input type="checkbox" id="stage" name="items[]" value="Palco">
                    <label for="stage"><span></span>Palco</label>
                </div>
                <div class="form-group">
                    <input type="checkbox" id="drink" name="items[]" value="Open Bar">
                    <label for="drink"><span></span>Open Bar</label>
                </div>
                <div class="form-group">
                    <input type="checkbox" id="food" name="items[]" value="Open Food">
                    <label for="food"><span></span>Open Food</label>
                </div>
                <div class="form-group">
                    <input type="checkbox" id="gift" name="items[]" value="Brindes">
                    <label for="gift"><span></span>Brindes</label>
                </div>
            </div>
            <br>
            <input type="submit" class="btn btn-primary" value="Criar Evento">
        </form>
    </div>

@endsection
