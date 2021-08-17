@extends('layouts.main')

@section('title', 'Crede Events')

@section('content')

<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Crie seu Evento</h1>
    <form action="/events" method="POST" enctype="multipart/form-data">
    @csrf
        <div class="form-group">
            <label for="image">Imagem do Evento:</label>
            <input type="file" name="image" id="image" class="from-control-file">
        </div>
        <div class="form-group">
            <label for="title">Evento:</label>
            <input type="text" class="form-control" id="title" name="title" placeholder="Nome do Evento">
        </div>
        <div class="form-group">
            <label for="title">Data do evento:</label>
            <input type="date" class="form-control" id="date" name="date">
        </div>
        <div class="form-group">
            <label for="city">Cidade:</label>
            <input type="text" class="form-control" id="city" name="city" placeholder="Local do Evento">
        </div>
        <div class="form-group">    
            <label for="private">O evento é privado?</label>
            <select name="private" id="private" class="form-control">
                <option value="0" selected>Não</option>
                <option value="1">Sim</option>
            </select>
        </div>
        <div class="form-group">
            <label for="description">Descrição:</label>
            <textarea name="description" id="description" placeholder="O que vai acontecer no evento?" class="form-control"></textarea>
        </div> 
        <div class="form-group">
            <label for="description">Adicione Itens de infraestrutura:</label>
            <div class="form-group">
                <input type="checkbox" name="items[]" id="" value="Cadeiras">Cadeiras    
            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" id="" value="Palco">Palco    
            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" id="" value="Cerveja Grátis">Cerveja Grátis    
            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" id="" value="Open Food">Open Food    
            </div>
            <div class="form-group">
                <input type="checkbox" name="items[]" id="" value="Brindes">Brindes    
            </div>
        </div>   
          
        
        <input type="submit" value="Criar Evento" class="btn btn-primary">
       
    </form>
</div>

@endsection