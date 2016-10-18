@extends('layouts.app')
    @section('content')
        @include('errors.success')
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-info">
                        <div class="panel-heading">Last News: <a href="{{ route('posts.create') }}"><button class="pull-right btn btn-success btn-sm">Create</button></a> </div>

                        <div class="panel-body">

                            @forelse ($posts as $post)
                                <h3><a href="posts/{{$post->slug_title}}">{{ $post->title }}</a> <small> author: {{ $post->user->name }} </small> </h3>
                                <p>
                                    {{ $post->content }}
                                </p>
                                <a href="{{ route('posts.edit', $post->id) }}"><button class="btn btn-primary btn-sm">Editar</button></a>
                                    {!! Form::open(['route' => ['posts.delete', $post->id], 'method' => 'delete']) !!}

                                        {!! Form::submit('Deletar', ['class' => 'btn btn-danger']) !!}

                                    {!! Form::close() !!}
                                <hr>
                            @empty
                                Nenhum resultado encontrado
                            @endforelse

                            {!! $posts->render() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection

