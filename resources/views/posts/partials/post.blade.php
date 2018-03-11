<div class="card mb-4">
  <img class="card-img-top" src="http://placehold.it/918x300" alt="Card image cap">
  <div class="card-body">
    <h2 class="card-title">{{ $post->title }}</h2>
    <p class="card-text">{{ $post->body }}</p>
    <a href="/blog/{{ $post->id }}" class="btn btn-outline-primary">Read More &rarr;</a>
  </div>
  <div class="card-footer text-muted">
    {{ $post->created_at->toFormattedDateString() }} by <a href="#">{{ $post->user->name }}</a>
  </div>
</div>