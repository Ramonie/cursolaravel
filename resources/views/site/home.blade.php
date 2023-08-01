@extends('site.layout')
@section('title', 'Essa é a página home')
@section('conteudo')
    <h1>Essa é a home</h1>

    {{--Isso é um comentário--}}

    {{--Usando operador ternário para verificar a existência--}}
    {{--isset($nome) ? 'existe': 'Não existe' --}}
    {{--Colocando um valor padrão--}}
    {{--$teste ?? 'Padrão'--}}
    {{--Verificando autenticação de usuário: se existe alguêm autenticado--}}
    @auth
     Está autenticado   
    @endauth
    Não está autenticado<br>


    {{--Estruturas  de repetição--}}
    {{--@for ($i = 0; $i <= 10; $i++)
        valor atual é {{$i}}<br>
    @endfor
    
    @php $i =0; @endphp

    @while ($i <=15)
    valor atual é {{$i}}<br>
    @php $i++@endphp
    @endwhile 
   
    @endfor


    --- Passando um array no controller ------
    @foreach ($frutas as $frutas)
        {{$frutas}} <br>        
    @endforeach

    @forelse ($frutas as $frutas)
        {{$frutas}} <br>    
    @empty
        array está vazio 
    @endempty    
    @endforeach--}}



@endsection