
@extends('layout.site')

@section('titulo','Produtos')

@section('conteudo')
<div class="conteiner">
<h1>Editar Produtos</h1>
<div class="row">
    <form class="" action="{{route('admin.produtos.atualizar', $registro->id)}}" method="post" enctype="multipart/form-data"></form>
    
    // validacao token
    
    {{ csrf_field() }}

    <input type="hidden" name ="_method" value="put">

    @include('admin.produtos._form')

    <button class="btn deep-blue">Atualizar</button>

</div>

</div>


    
@endforeach
    
    
@endsection
