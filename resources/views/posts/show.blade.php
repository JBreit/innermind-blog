@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h1>{{ $post->title }}</h1>
                </div>

                <div class="card-body">
                    {{ $post->body }}

                    <hr>

                    <div class="comments">
                        <ul class="list-group">
                        @foreach ($post->comments as $comment)
                            <li class="list-group-item">
                                <strong>{{ $comment->created_at->diffForHumans() }}</strong>: &nbsp;
                                {{ $comment->body }}
                            </li>
                        @endforeach
                        </ul>
                    </div>

                    <div>
                        <div class="card-block">
                            <form method="POST" action="/posts/{{ $post->id }}/comments">
                                @csrf
                                <div class="form-group">
                                    <textarea class="form-control" name="body" placeholder="Leave a comment."></textarea>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Add Comment</button>
                                </div>
                            </form>

                            @include('layouts.errors')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
