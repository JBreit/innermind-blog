@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8">
            <h1 class="mt-4">Create A Tag</h1>

            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('tags.store') }}">
                @csrf
                <div class="form-group">
                    <label for="name">Title</label>
                    <input type="text" class="form-control" id="name" name="name" required />
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-outline-primary">Create New Tag</button>
                </div>
            </form>

            @include('layouts.errors')
        </div>
        @include('layouts.partials.sidebar')
    </div>
</div>
@endsection
