@if (isset($tag->title))
    <hr style="width: 100%">
    <p class="tag-link"><i class="fa fa-fw fa-tag"></i> Tagged in <a href="#">{{ $tag->title or '' }}</a></p>
    <p class="tag-subtitle">" {{ $tag->subtitle }} "</p>
    <hr style="width: 100%">
@endif
