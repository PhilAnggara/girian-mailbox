<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title')</title>

  @stack('prepend-style')
  @include('includes.style')
  @livewireStyles
  @stack('addon-style')

</head>
<body class="sidebar-dark sidebar-fixed">

  <div class="container-scroller"> 
    @include('includes.navbar')
    <div class="container-fluid page-body-wrapper">
      @include('includes.sidebar')
      <div class="main-panel">
        @yield('content')
        {{-- @include('includes.footer') --}}
      </div>
    </div>
  </div>

  @stack('prepend-script')
  @include('includes.script')
  @livewireScripts
  @stack('addon-script')

</body>
</html>