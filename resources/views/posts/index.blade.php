@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">All Posts</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    @if (isset($posts))
                        @foreach($posts as $post)
                            @include('posts.post')
                        @endforeach
                    @else
                        There are no posts.
                    @endif
                </div>
            </div>
            @include('layouts.sidebar')
        </div>
    </div>
</div>
@endsection
