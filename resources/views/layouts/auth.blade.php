<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>@yield('title')</title>

  @stack('prepend-style')
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="{{ url('auth/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ url('auth/css/style.css') }}">
  @livewireStyles
  @stack('addon-style')

</head>
  
  @yield('content')

  @stack('prepend-script')
	<script src="{{ url('auth/js/jquery.min.js') }}"></script>
  <script src="{{ url('auth/js/popper.js') }}"></script>
  <script src="{{ url('auth/js/bootstrap.min.js') }}"></script>
  <script src="{{ url('auth/js/main.js') }}"></script>
  @livewireScripts
  @stack('addon-script')

</body>
</html>