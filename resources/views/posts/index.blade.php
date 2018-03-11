@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8">
            <h1 class="my-4">Blog <!-- <small>Secondary Text</small> --></h1>
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            
            @if (isset($posts))
                @foreach($posts as $post)
                    @include('posts.partials.post')
                @endforeach
            @else
                There are no posts.
            @endif
            <ul class="pagination justify-content-center mb-4">
                <li class="page-item">
                    <a class="page-link" href="#">&larr; Older</a>
                </li>
                <li class="page-item disabled">
                  <a class="page-link" href="#">Newer &rarr;</a>
                </li>
            </ul>
        </div>
        @include('layouts.partials.sidebar')
    </div>
</div>
@endsection
