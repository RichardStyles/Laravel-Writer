@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md">
                @foreach($posts as $post)
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h4><a href="{{ $post->path() }}">{{ $post->title }}</a></h4>
                        </div>

                        <div class="panel-body">
                            {{ $post->body }}
                        </div>

                        <div class="panel-footer">
                            Published at {{$post->created_at->diffForHumans()}} by {{$post->user->name}}
                        </div>
                    </div>
                @endforeach

                {{$posts->links()}}
            </div>
        </div>
    </div>
@endsection
