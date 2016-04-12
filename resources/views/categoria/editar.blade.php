@extends('app')

@section('content')
    <div class="row">
        <div class="large-12 medium-12 small-12 columns">
            <div class="title">Edição da categoria: {{$categoria->nome}}</div>
                @if($errors->any())
                    <ul class="alert">
                        @foreach($errors->all() as $erro)
                            <li>{{ $erro }}</li>
                        @endforeach
                    </ul>
                @endif
                {!! Form::open(['route'=>['categoria.atualizar', $categoria->id], 'method'=>'put']) !!}
                    {!! Form::label('nome', 'Nome:') !!}
                    {!! Form::text('nome', $categoria->nome) !!}
                    {!! Form::label('descricao', 'Descrição:') !!}
                    {!! Form::textarea('descricao', $categoria->descricao) !!}
                    {!! Form::submit('Editar', ['class'=>'expanded success button']) !!}
                {!! Form::close() !!}
        </div>
    </div>
@endsection