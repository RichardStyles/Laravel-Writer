@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Post</div>

                    <div class="panel-body">
                            <article>
                                <h4>{{ $post->title }}</h4>
                                <div class="body">{{ $post->body }}</div>
                            </article>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
