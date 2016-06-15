<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="{{ csrf_token() }}" name="csrf-param" />
    <title>@yield('title')</title>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css" integrity="sha384-XdYbMnZ/QjLh6iI4ogqCTaIjrFk87ip+ekIjefZch0Y+PvJ8CDYtEs1ipDmPorQ+" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700">

    <!-- Styles -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    {{-- <link href="{{ elixir('css/app.css') }}" rel="stylesheet"> --}}
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/template.css') }}">
    @yield('css')
</head>
<body id="app-layout">
  <nav id="seedcamp-nav" class="navbar navbar-default navbar-static-top">
  <a id="seedcamp-header" class="navbar-brand" href="{{ url('/') }}">Social Network by THiNKNET</a>
  @if (Auth::guest())
    <ul class="nav navbar-nav navbar-right">
      <li><a href="{{ url('/login') }}">Login</a></li>
      <li><a href="{{ url('/register') }}">Register</a></li>
    </ul>
  @else
    <ul class="nav navbar-nav navbar-right">
      <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
            {{ Auth::user()->username }} <span class="caret"></span>
        </a>
        <ul class="dropdown-menu" role="menu">
            <li><a href="{{ url('/profile/edit') }}"><i class="fa fa-btn"></i>Profile</a></li>
            <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
        </ul>
      </li>
    </ul>
  @endif
  </nav>
  @yield('content')
  {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
  <script src="{{ asset('js/jquery-2.0.0.min.js') }}"></script>
  <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/scripts.js') }}"></script>
  @yield('js')
</body>
</html>
