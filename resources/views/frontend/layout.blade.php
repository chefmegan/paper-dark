<!DOCTYPE html>
<html lang="en">
<head>

  @include('layouts.css')
 
  @include('canvas::frontend.shared.partials.meta')

  @include('canvas::frontend.shared.partials.user-generated-css')

</head>

<body>

      @include('canvas::frontend.shared.partials.header')
      
<section class="body-section">
      
      @yield('content')
      @include('canvas::frontend.shared.partials.user-generated-js')
      
      @include('layouts.bottom')
      @yield('unique-js')
      @include('layouts.scripts')
      
<section>      

</body>

</html>
