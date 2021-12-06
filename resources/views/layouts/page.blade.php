<!DOCTYPE html>
<html lang="">
<head>
@include('partials.head')
@yield('css')
</head>
  <body class="main-body {{Route::currentRouteName()}}">
  <!-- cargo el header -->
  @include('partials.header')
  <!-- cargo el contenido -->
  @yield('content')
  <!-- cargo el footer -->
  @include('partials.footer')
  @yield('scripts')
</body>
</html>
