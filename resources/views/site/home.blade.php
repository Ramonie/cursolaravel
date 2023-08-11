@extends('site.layout')
@section('title', 'Home')
@section('conteudo')

   <div class="row container">
    @foreach($produtos as $produto)
    <div class=" col s12 m3">
        <div class="card">
            <div class="card-image">
              <img src="{{$produto->imagem}}">
              <span class="card-title">{{$produto->nome}}</span>
              <a class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">add</i></a>
            </div>
            <div class="card-content">
              <p>{{ Str::limit($produto->descricao, 90) }}</p>
            </div>
          </div>

    </div>
    @endforeach
   </div>


    {{--Isso é um comentário--}}

    

    {{--Usando operador ternário para verificar a existência--}}
    {{--isset($nome) ? 'existe': 'Não existe' --}}
    {{--Colocando um valor padrão--}}
    {{--$teste ?? 'Padrão'--}}
    {{--Verificando autenticação de usuário: se existe alguêm autenticado
    @auth
     Está autenticado   
    @endauth
    Não está autenticado<br>
    --}}


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
    @endforeach
        <p>Usando include</p>
    @include('includes.mensagem')
--}}
@endsection