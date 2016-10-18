@extends('layouts.app')
@section('content')
    <div class="container">
        @include('errors.errors')
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Create new post</div>

                    <div class="panel-body">

                        {!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'put']) !!}

                        {!! Form::label('title', 'Título: ') !!}
                        {!! Form::text('title', $post->title, ['class' => 'form-control', 'autofocus' => 'true']) !!}

                        {!! Form::label('content', 'Conteúdo: ') !!}
                        {!! Form::textarea('content', $post->content, ['class' => 'form-control']) !!}

                        {!! Form::submit('Cadastrar', ['class' => 'btn btn-primary']) !!}

                        {!! Form::close() !!}


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
