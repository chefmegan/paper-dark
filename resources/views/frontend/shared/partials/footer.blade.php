

<div>
    @if(!empty(\Canvas\Models\Settings::disqus()))
        @include('canvas::frontend.blog.partials.disqus')
    @endif
</div>

<br>
<span id="top-link-block">
<a id="scroll-to-top" class="tag is-primary is-large" href="#top">Scroll to Top</a>
</span>

@if (!empty(\Canvas\Models\Settings::gaId()))
    @include('canvas::frontend.blog.partials.analytics')
@endif

