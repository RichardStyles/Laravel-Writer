@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4>{{ $post->title }}</h4>
                    </div>

                    <div class="panel-body">
                        {{ $post->body }}
                    </div>

                    <div class="panel-footer">
                        Published at {{$post->created_at->diffForHumans()}} by {{$post->user->name}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
