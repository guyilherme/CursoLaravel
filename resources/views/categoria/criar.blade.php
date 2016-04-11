@extends('app')

@section('content')
    <div class="row">
        <div class="large-12 medium-12 small-12 columns">
            <div class="title">Criação de Categorias</div>
                {!! Form::open() !!}
                    {!! Form::label('nome', 'Nome:') !!}
                    {!! Form::text('nome', null) !!}
                    {!! Form::label('descricao', 'Descrição:') !!}
                    {!! Form::textarea('descricao', null) !!}
                    {!! Form::submit('Adicionar nova categoria', ['class'=>'success button']) !!}
                {!! Form::close() !!}
        </div>
    </div>
@endsection