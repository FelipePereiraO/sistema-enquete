@extends('layouts.main')

@section('title', 'Enquete')
<?php
    $dataAtual = date('y-m-d');
    $dataFim = $enquete->data_fim;
?>
@section('content')
    <div class="painel">
        <p class="finalizada"><?php if(strtotime($dataAtual) > strtotime($dataFim)) {?>Enquete Finalizada<?php }?></p>
        <div class="d-flex justify-content-end">
            <div id="titulo">
                <h1>{{$enquete->titulo}}</h1>
            </div>
            <div id="data">
                <p>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar" viewBox="0 0 16 16">
                        <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                    </svg>                   
                    Inicio: {{$enquete->data_inicio}}
                </p>
                <p>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-calendar" viewBox="0 0 16 16">
                        <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
                    </svg>                    
                    Fim: {{$enquete->data_fim}}
                </p>
                <p>
                    Deletar Enquete
                    <a class="btn btn-danger btn-lg" href="/deletar/{{$enquete->id}}">

                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                        </svg>
                        
                    </a>                    
                </p>
                <p>
                    Alterar Enquete
                    <a class="btn btn-warning btn-lg" href="/dados/{{$enquete->id}}">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                        </svg>
                    </a>                    
                </p>
            </div>            
        </div>
        <div class="respostas">
            <div class="d-flex justify-content-evenly">
              <label>Quant. de Respostas: {{$enquete->cont_resposta_1}}</label>  
              <label>Quant. de Respostas: {{$enquete->cont_resposta_2}}</label>
              <label>Quant. de Respostas: {{$enquete->cont_resposta_3}}</label>
            </div>
            <div class="d-flex justify-content-evenly">
                <a id="btn" class="btn btn-primary btn-lg <?php if(strtotime($dataAtual) > strtotime($dataFim)) {?>disabled<?php }?>" href="/resposta1/{{$enquete->id}}">{{$enquete->resposta_1}}</a>
                <a id="btn" class="btn btn-primary btn-lg <?php if(strtotime($dataAtual) > strtotime($dataFim)) {?>disabled<?php }?>" href="/resposta2/{{$enquete->id}}">{{$enquete->resposta_2}}</a>
                <a id="btn" class="btn btn-primary  btn-lg <?php if(strtotime($dataAtual) > strtotime($dataFim)) {?>disabled<?php }?>" href="/resposta3/{{$enquete->id}}" >{{$enquete->resposta_3}}</a>           
            </div>            
        </div>
      
    </div>
@endsection