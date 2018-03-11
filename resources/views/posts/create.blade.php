@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8">
            <h1 class="mt-4">Create A Post</h1>

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('blog.store') }}">
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" required />
                </div>
                <div class="form-group">
                    <label for="body">Body</label>
                    <textarea class="form-control" id="body" name="body" required></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-outline-primary">Publish</button>
                </div>
            </form>

            @include('layouts.errors')
        </div>
        @include('layouts.partials.sidebar')
    </div>
</div>
@endsection
