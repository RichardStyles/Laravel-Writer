@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md">
                @forelse($posts as $post)
                    @include('posts.partials.post')
                @empty
                    <p>Someone has yet to write a post.</p>
                @endforelse

                {{$posts->links()}}
            </div>
        </div>
    </div>
@endsection
