<div>
    {{-- Reverse direction --}}
    @if ($reverse_direction)
        @if ($posts->currentPage() > 1)
                <a class="button is-outlined" href="{!! $posts->url($posts->currentPage() - 1) !!}">
                    <i class="fa fa-angle-left fa-lg"></i>
                    Previous {{ $tag->tag }}
                </a>
        @endif
        @if ($posts->hasMorePages())
                <a class="button is-outlined" href="{!! $posts->nextPageUrl() !!}">
                    Next {{ $tag->tag }}
                    <i class="fa fa-angle-right"></i>
                </a>
        @endif
    @else
        @if ($posts->currentPage() > 1)
                <a class="button is-outlined" href="{!! $posts->url($posts->currentPage() - 1) !!}">
                    <i class="fa fa-angle-left fa-lg"></i>
                    Newer {{ $tag ? $tag->tag : '' }}
                </a>
        @endif
        @if ($posts->hasMorePages())
                <a class="button is-outlined" href="{!! $posts->nextPageUrl() !!}">
                    Older {{ $tag ? $tag->tag : '' }}
                    <i class="fa fa-angle-right"></i>
                </a>
        @endif
    @endif
</div>
