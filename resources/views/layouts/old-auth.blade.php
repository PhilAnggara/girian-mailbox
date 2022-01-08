<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title')</title>

  {{-- @stack('prepend-style')
  @include('includes.style')
  @livewireStyles
  @stack('addon-style') --}}

  <link rel="stylesheet" href="{{ url('frontend/assets/vendors/feather/feather.css') }}">
  <link rel="stylesheet" href="{{ url('frontend/assets/vendors/mdi/css/materialdesignicons.min.css') }}">
  <link rel="stylesheet" href="{{ url('frontend/assets/vendors/ti-icons/css/themify-icons.css') }}">
  <link rel="stylesheet" href="{{ url('frontend/assets/vendors/typicons/typicons.css') }}">
  <link rel="stylesheet" href="{{ url('frontend/assets/vendors/simple-line-icons/css/simple-line-icons.css') }}">
  <link rel="stylesheet" href="{{ url('frontend/assets/vendors/css/vendor.bundle.base.css') }}">
  <link rel="stylesheet" href="{{ url('frontend/assets/css/vertical-layout-light/style.css') }}">
  <link rel="shortcut icon" href="{{ url('frontend/images/favicon.png') }}">

</head>
<body class="boxed-layout">
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-stretch auth auth-img-bg">
        @yield('content')
      </div>
    </div>
  </div>

  {{-- @stack('prepend-script')
  @include('includes.script')
  @livewireScripts
  @stack('addon-script') --}}

  <script src="{{ url('frontend/assets/vendors/js/vendor.bundle.base.js') }}"></script>
  <script src="{{ url('frontend/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
  <script src="{{ url('frontend/assets/js/off-canvas.js') }}"></script>
  <script src="{{ url('frontend/assets/js/hoverable-collapse.js') }}"></script>
  <script src="{{ url('frontend/assets/js/template.js') }}"></script>
  <script src="{{ url('frontend/assets/js/settings.js') }}"></script>
  <script src="{{ url('frontend/assets/js/todolist.js') }}"></script>

</body>
</html>