<div class="col-lg-4">
  <div class="card my-4">
    <h4 class="card-header">Search</h4>
    <div class="card-body">
      <div class="input-group">
        <input type="text" class="col-auto form-control" placeholder="Search for...">
        <span class="col-auto input-group-btn">
          <button class="btn btn-outline-primary" type="button">Go!</button>
        </span>
      </div>
    </div>
  </div>

  <div class="card my-4">
    <h4 class="card-header">Archives</h4>
    <div class="card-body">
      <div class="row">
        <div class="col-lg-6">
          <ol class="list-unstyled mb-0">
          @foreach ($archives as $stats )
            <li>
              <a href="/blog/?month={{ $stats['month'] }}&year={{ $stats['year'] }}">
                {{ $stats['month'] . ' ' . $stats['year'] }}
              </a>
            </li>
            @endforeach
          </ol>
        </div>
      </div>
    </div>
  </div>

    <div class="card my-4">
    <h4 class="card-header">Tags</h4>
    <div class="card-body">
      <div class="row">
        <div class="col-lg-6">
          <ol class="list-unstyled mb-0">
          @foreach ($tags as $tag )
            <li>
              <a href="/posts/tags/{{ $tag }}">
                {{ $tag }}
              </a>
            </li>
            @endforeach
          </ol>
        </div>
      </div>
    </div>
  </div>

  <div class="card my-4">
    <h4 class="card-header">Elsewhere</h4>
    <div class="card-body">
      <div class="row">
        <div class="col-lg-6">
          <ol class="list-unstyled mb-0">
            <li><a href="#">GitHub</a></li>
            <li><a href="#">Twitter</a></li>
            <li><a href="#">Facebook</a></li>
          </ol>
        </div>
      </div>
    </div>
  </div>
</div>