@extends('site.layout')
@section('title', 'Essa é a página home')
@section('conteudo')
    <h1>Essa é a home</h1>

    {{--Isso é um comentário--}}

    {{--Usando operador ternário para verificar a existência--}}
    {{--isset($nome) ? 'existe': 'Não existe' --}}
    {{--Colocando um valor padrão--}}
    {{$teste ?? 'Padrão'}}

@endsection