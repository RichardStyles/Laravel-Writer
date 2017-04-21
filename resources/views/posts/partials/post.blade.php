<div class="panel panel-default">
    <div class="panel-heading">
        <h4><a href="{{ $post->path() }}">{{ $post->title }}</a></h4>
    </div>

    <div class="panel-body">
        {{ $post->body }}
    </div>

    <div class="panel-footer">
        Published at {{$post->created_at->diffForHumans()}} by {{$post->creator->name}}
    </div>
</div>