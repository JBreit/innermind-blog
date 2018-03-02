@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h2>
                        <a href="/posts/{{ $post->id }}">{{ $post->title }}</a>
                    </h2>
                    <span>{{ $post->user->name }}</span>
                    <p>{{ $post->created_at->toFormattedDateString() }}</p>
                    </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{ $post->body }}
                </div>
            </div>
            @include('layouts.sidebar')
        </div>
    </div>
</div>
@endsection
