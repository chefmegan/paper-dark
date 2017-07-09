@extends('canvas::frontend.layout')

@if (isset($tag->title))
@section('title', \Canvas\Models\Settings::blogTitle().' | '.$tag->title)
@else
@section('title', \Canvas\Models\Settings::blogTitle().' | Blog')
@endif
@section('og-title', \Canvas\Models\Settings::blogTitle())
@section('twitter-title', \Canvas\Models\Settings::blogTitle())
@section('og-description', \Canvas\Models\Settings::blogDescription())
@section('twitter-description', \Canvas\Models\Settings::blogDescription())

@section('content')
           <div class="container has-text-centered">
        @include('canvas::frontend.blog.partials.tag')
           </div>
          <div class="container">
            @include('canvas::frontend.blog.partials.posts')
         </div>
          <div class="container has-text-centered">
          <br>
        @include('canvas::frontend.blog.partials.paginate-index')
         </div>

@stop
