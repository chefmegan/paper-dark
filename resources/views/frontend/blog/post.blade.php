@extends('canvas::frontend.layout')

@section('og-title', $post->title)
@section('twitter-title', $post->title)
@section('og-description', $post->meta_description)
@section('twitter-description', $post->meta_description)
@section('title', \Canvas\Models\Settings::blogTitle().' | '.$post->title)
@if ($post->page_image)
@section('og-image', url( $post->page_image ))
@section('twitter-image', url( $post->page_image ))
@endif

@section('content')

<div>

<div class="container has-text-centered">

  <h1 class="title is-2 is-primary">
    {{ $post->title }}
    </h1>
    <h2 class="subtitle is-4">
    {{ $post->subtitle }} 
  </h2>
  <h3 class="subtitle is-6">
    {{ \Carbon\Carbon::parse($post->published_at)->diffForHumans() }}</p>
  </h3>
  <h4 class="subtitle is-6">
    @if ($post->tags->count())
    {!! join(' ', $post->tagLinks()) !!}
    @endif
  </h4>

</div>

  <div class="container">
    <p>
      {!! $post->content_html !!}
    </p>
  </div>

  <div class="content blog-post section">
    @include('canvas::frontend.blog.partials.author') 
    @include('canvas::frontend.shared.partials.footer') 
  </div>
  
</div>

@stop

@section('unique-js')
<script src="{{ elixir('vendor/canvas/assets/js/frontend.js') }}" charset="utf-8"></script>
@endsection
