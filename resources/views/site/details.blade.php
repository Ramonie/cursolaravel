@extends('site.layout')
@section('title', 'Detalhes')
@section('conteudo')

<div class="row container">
    <div class="col s12 m6">
      <img src="  {{$produtos->imagem}}" class="responsive-img">
    </div>

    <div class="col s12 m6">
        <h1>{{$produtos->nome}}</h1>
        <p>{{$produtos->descricao}}</p>
        <button class="btn orange btn-large">Comprar</button>
    </div>
</div>

@endsection


