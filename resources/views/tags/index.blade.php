@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8">
            <h1 class="my-4">Tags</h1>
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
            

            @if (isset($tags))
                <table>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($tags as $tag)
                            <tr>
                                <th>{{ $tag->id }}</th>
                                <td><a href="{{ url('/blog/tags', $tag->name) }}">{{ $tag->name }}</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                There are no tags.
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
