@extends('layout.site')

@section('titulo','Produtos')

@section('conteudo')
<h1>Lista de produtos</h1>

<table>
<div class="row">
    <thead>
        <tr>
            <th>Nome</th>
            <th>preco</th>
            <th>codigo</th>
            <th>Categoria</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($registros as $registro)
            
        <tr>
            <td>{{$registro->id}}</td>
            <td>{{$registro->nome}}</td>
            <td>{{$registro->preco}}</td>
            <td>{{$registro->categoria}}</td>
            <td>{{$registro->status}}</td>

            <td>
                <a class="btn deep-green" href="{{route('admin.produtos.editar', $registro->id)}}">Editar</a>
                <a class="btn deep-red" href="{{route('admin.produtos.deletar', $registro->id)}}">Deletar</a>
            </td>
        </tr>
        
        @endforeach
    </tbody>
</table>
</div>

<div class="row">
    <a class="btn deep-blue" href="{{route('admin.produtos.adicionar')">Adicionar</a>
</div>

    

    
    
@endsection
