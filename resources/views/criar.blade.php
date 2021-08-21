@extends('layouts.main')

@section('title', 'Criar Enquete')

@section('content')
    
    <form id="form" class="row" action="/enquete" method="post">
        @csrf
        <h1>Criar Enquete</h1>
        <div class="col-12">
            <label class="form-label" for="titulo">Titulo</label>
            <input class="form-control" type="text" id="titulo" name="titulo" placeholder="Titulo da Enquete">            
        </div>
        <div class="col-6">
            <label class="form-label" for="resposta_1">1° Resposta</label>
            <input class="form-control" type="text" id="resposta_1" name="resposta_1">
            <label class="form-label" for="resposta_2">2° Resposta</label>
            <input class="form-control"  type="text" id="resposta_2" name="resposta_2">
            <label class="form-label" for="resposta_3">3° Resposta</label>
            <input class="form-control"  type="text" id="resposta_3" name="resposta_3">              
        </div>
        <div class="col-6">
            <label class="form-label" for="data_inicio">Inicio na data:</label>
            <input class="form-control"  type="date" id="data_inicio" name="data_inicio">   
            <label class="form-label" for="data_fim">Finaliza na data:</label>
            <input class="form-control"  type="date" id="data_im" name="data_fim">         
        </div>
 
        <input class="btn btn-success criar" type="submit" value="Criar Enquete">
    </form>
@endsection