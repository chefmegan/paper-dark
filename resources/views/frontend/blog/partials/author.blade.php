<div class="box" id="businessCard">
  <article class="media">

    <div class="media-left">
      <figure class="image is-64x64">
        <img style="margin: 0 15px 0 0" class="img-responsive img-circle author-img" src="https://www.gravatar.com/avatar/{{ md5($user->email) }}?d=identicon&s=150" title="{{ $user->first_name .  ' ' . $user->last_name }}">
      </figure>
    </div>

    <div class="media-content">
      <div class="content">

        <p>
          <a href="/about">{{ $user->first_name .  ' ' . $user->last_name }}</a>
          <br>
          {{ $user->bio }}
          <br>
        </p>
      </div>

      <nav class="level is-mobile">

        <div class="level-left">


          @if (!empty($user->twitter))
          <a href="https://twitter.com/{{ $user->twitter }}" target="_blank" id="social" class="level-item">
            <span class="icon is-small"><i class="fa fa-twitter"></i></span>
          </a>
          @endif

          @if (!empty($user->facebook))
          <a href="https://facebook.com/{{ $user->facebook }}" target="_blank" id="social" class="level-item">
            <span class="icon is-small"><i class="fa fa-facebook"></i></span>
          </a>
          @endif

          @if (!empty($user->github))
          <a href="https://github.com/{{ $user->github }}" target="_blank" id="social" class="level-item">
            <span class="icon is-small"><i class="fa fa-github"></i></span>
          </a>
          @endif

          @if(!empty($user->linkedin))
          <a href="https://linkedin.com/in/{{ $user->linkedin }}" target="_blank" id="social" class="level-item">
            <span class="icon is-small"><i class="fa fa-linkedin"></i></span>
          </a>
          @endif

        </div>

      </nav>

    </div>

  </div>

</article>
</div>
