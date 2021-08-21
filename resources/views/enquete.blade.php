@extends('layouts.main')

@section('title', 'Enquetes')

@section('content')

    <header>
        <h1>Enquetes</h1>
    </header>
    <main>
        <div class="container">
            <div class="row row-cols-1 row-cols-sm-6 ">    
                @foreach($enquete as $enquetes)
                    <?php
                        $dataAtual = date('y-m-d');
                        $dataFim = $enquetes->data_fim;  
                    ?>
                    <div class="col col-sm-4" id="card">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title">{{$enquetes->titulo}}</h3>
                                <p class="card-text"> Inicio: {{$enquetes->data_inicio}}</p>
                                <p class="card-text <?php if(strtotime($dataAtual) > strtotime($dataFim)) {?>finalizada<?php }?>">Fim: {{$enquetes->data_fim}} <?php if(strtotime($dataAtual) > strtotime($dataFim)) {?>Enquete Finalizada<?php }?></p>
                                <div class="button">
                                    <a class="btn btn-primary" href="/{{$enquetes->id}}">Responder<a>
                                </div>            
                            </div>
                        </div>
                    </div>                
                @endforeach  
            </div>             
        </div>
              

   
        
    </main>

@endsection