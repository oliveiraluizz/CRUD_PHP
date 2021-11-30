
@extends('layout.site')

@section('titulo','Produtos')

@section('conteudo')
<div>
<h1>Adicionar Produtos</h1>
<div class="row">
    <form class="" action="{{route('admin.produtos.salvar')}}" method="post" enctype="multipart/form-data"></form>
    
    // validacao token
    
    {{ csrf_field() }}

    @include('admin.produtos._form')

    <button class="btn deep-blue">Salvar</button>

</div>

</div>


    
@endforeach
    
    
@endsection
