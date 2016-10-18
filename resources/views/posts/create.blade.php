@extends('layouts.app')
    @section('content')
        <div class="container">
            @include('errors.errors')
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">Create new post</div>

                        <div class="panel-body">

                            {!! Form::open(['route' => 'posts.store', 'method' => 'post']) !!}

                                {!! Form::label('title', 'Título: ') !!}
                                {!! Form::text('title', null, ['class' => 'form-control', 'autofocus' => 'true']) !!}

                                {!! Form::label('content', 'Conteúdo: ') !!}
                                {!! Form::textarea('content', null, ['class' => 'form-control']) !!}

                                {!! Form::submit('Cadastrar', ['class' => 'btn btn-primary']) !!}

                            {!! Form::close() !!}


                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
