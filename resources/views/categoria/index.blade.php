@extends('app')

@section('content')
<div class="content">
    <div class="row">
        <div class="large-12 medium-12 small-12 columns">
            <div class="title">Listagem de Categorias</div>
        </div>
        <table class="table-scroll">
            <tr>
                <th>
                    ID
                </th>
                <th>
                    Nome
                </th>
                <th>
                    Descrição
                </th>
                <th>
                    Ações
                </th>
            </tr>
            @foreach($categorias as $categoria)
            <tr>
                <td>
                    {{ $categoria->id }}
                </td>
                <td>
                    {{ $categoria->nome }}
                </td>
                <td>
                    {{ $categoria->descricao }}
                </td>
                <td>

                </td>
            </tr>
            @endforeach
        </table>
</div>
@endsection