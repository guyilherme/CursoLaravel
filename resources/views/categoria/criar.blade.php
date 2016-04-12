@extends('app')

@section('content')
    <div class="row">
        <div class="large-12 medium-12 small-12 columns">
            <div class="title">Criação de Categorias</div>
                @if($errors->any())
                    <ul class="alert">
                        @foreach($errors->all() as $erro)
                            <li>{{ $erro }}</li>
                        @endforeach
                    </ul>
                @endif
                {!! Form::open(['url'=>'categoria']) !!}
                    {!! Form::label('nome', 'Nome:') !!}
                    {!! Form::text('nome', null) !!}
                    {!! Form::label('descricao', 'Descrição:') !!}
                    {!! Form::textarea('descricao', null) !!}
                    {!! Form::submit('Adicionar nova categoria', ['class'=>'success button']) !!}
                {!! Form::close() !!}
        </div>
    </div>
@endsection