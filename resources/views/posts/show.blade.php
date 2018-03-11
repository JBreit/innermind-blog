@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8">
            <h1 class="mt-4">{{ $post->title }}</h1>
            <p class="lead">
                <span class="text-muted">by <a href="#">{{ $post->user->name }}</a> on {{ $post->created_at->toFormattedDateString() }}</span>
            </p>
            <hr>
            <img class="img-fluid rounded" src="http://placehold.it/918x300" alt="">
            <hr>

            {{ $post->body }}

            @guest
                <div class="media my-4 mb-4">
                    @foreach ($post->comments as $comment)
                        @include('posts.partials.comment')
                    @endforeach
                </div>
            @else
                <div class="card my-4">
                    <h5 class="card-header">Leave a Comment:</h5>
                    <div class="card-body">
                        <form method="POST" action="/blog/{{ $post->id }}/comments">
                            @csrf
                            <div class="form-group">
                                <textarea class="form-control" rows="3" name="body" placeholder="Leave a comment." required></textarea>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-outline-primary">Add Comment</button>
                            </div>
                        </form>
                        @include('layouts.errors')
                    </div>
                </div>
                <div class="media mb-4">
                    @foreach ($post->comments as $comment)
                        @include('posts.partials.comment')
                    @endforeach
                </div>
            @endguest
        </div>
        @include('layouts.partials.sidebar')
    </div>
</div>
@endsection
