@extends('app')

@section('content')
<div class="content">
    <div class="row">
        <div class="large-12 medium-12 small-12 columns">
            <div class="title">Listagem de Categorias</div>
        </div>
        <table class="table-scroll">
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Ações</th>
            </tr>
            @foreach($categorias as $categoria)
            <tr>
                <td>{{ $categoria->id }}</td>
                <td>{{ $categoria->nome }}</td>
                <td>{{ $categoria->descricao }}</td>
                <td><a href="{{route('categoria.apagar', ['id'=>$categoria->id])}}" class="success button">Apagar</a> |
                <a href="{{route('categoria.editar', ['id'=>$categoria->id])}}" class="alert button">Editar</a></td>
            </tr>
            @endforeach
        </table>
        <div class="large-12 medium-12 small-12 columns">
            <a href="{{route('categoria.criar')}}" class="expanded button">Criar nova categoria</a>
        </div>
</div>
@endsection