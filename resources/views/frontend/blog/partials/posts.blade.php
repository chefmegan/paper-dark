
@foreach ($posts->chunk(3) as $chunk)

<div class="columns">

  @foreach ($chunk as $post)

  <div class="column is-4">

    <div class="card">
      <header class="card-header">
        <a class="card-header-title" href="{{ $post->url($tag) }}">
          {{ $post->title }}
        </a>
        <span class="card-header-icon timestamp">
          {{ $post->published_at->diffForHumans() }}
        </span>
      </header>

      @if ($post->page_image)

      <a href="{{ $post->url($tag) }}">
        <div class="card-image">
          <figure class="image is-4by4">
            <img src="{{ asset($post->page_image) }}">
          </figure>
        </div>
      </a>

      @endif

      <div class="card-content">

    <div class="content">
        {{ str_limit($post->subtitle, config('blog.frontend_trim_width')) }} <a href="{{ $post->url($tag) }}">read more</a>
     <br>
     @unless( $post->tags->isEmpty())
     <span class="tag is-small">
       {!! implode(' ', $post->tagLinks()) !!}
     </span>
     @endunless
   </div>

      </div>

    </div>

  </div>

  @endforeach

</div>

@endforeach
