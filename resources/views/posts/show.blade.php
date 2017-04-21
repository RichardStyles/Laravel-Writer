@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md">
                @include('posts.partials.post')
            </div>
        </div>
    </div>
@endsection
