@extends('layouts.main')

@section('title', 'Atualizar Enquete')

@section('content')

    <form id="form" class="row" action="/atualizar/{{$enquete->id}}" method="post">
            @csrf
            @method('PUT')
            <h1>Atualizar Enquete</h1>
            <div class="col-12">
                <label class="form-label" for="titulo">Titulo</label>
                <input class="form-control" type="text" id="titulo" name="titulo" value="{{$enquete->titulo}}" placeholder="Titulo da Enquete">            
            </div>
            <div class="col-6">
                <label class="form-label" for="resposta_1">1° Resposta</label>
                <input class="form-control" type="text" id="resposta_1" name="resposta_1" value="{{$enquete->resposta_1}}">
                <label class="form-label" for="resposta_2">2° Resposta</label>
                <input class="form-control"  type="text" id="resposta_2" name="resposta_2" value="{{$enquete->resposta_2}}">
                <label class="form-label" for="resposta_3">3° Resposta</label>
                <input class="form-control"  type="text" id="resposta_3" name="resposta_3" value="{{$enquete->resposta_3}}">              
            </div>
            <div class="col-6">
                <label class="form-label" for="data_inicio">Inicio na data:</label>
                <input class="form-control"  type="date" id="data_inicio" name="data_inicio" value="{{$enquete->data_inicio}}">   
                <label class="form-label" for="data_fim">Finaliza na data:</label>
                <input class="form-control"  type="date" id="data_im" name="data_fim" value="{{$enquete->data_fim}}">         
            </div>
    
            <input class="btn btn-success criar" type="submit" value="Atualizar">
    </form>

@endsection