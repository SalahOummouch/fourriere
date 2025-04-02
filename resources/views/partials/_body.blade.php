
{{-- sdjkfs --}}
<div id="loading">

     @include('partials._body_loader')
  </div>
  <!-- loader END -->
  <!-- Wrapper Start -->
  <div class="wrapper">

{{-- @include('partials._body_sidebar_old') --}}
@include('partials._body_sidebar')
@include('partials._body_header')

    <div class="content-page ">
        {{ $slot }}
    </div>
  </div>
  <!-- Wrapper End-->
@include('partials._body_footer')
@include('partials._scripts')
