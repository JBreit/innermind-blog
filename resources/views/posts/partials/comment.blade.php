<img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
<div class="media-body">
    <h5 class="mt-0">{{ $comment->user->name }} <strong>{{ $comment->created_at->diffForHumans() }}</strong>: &nbsp;</h5>
    {{ $comment->body }}
</div>