<!DOCTYPE html>
<html lang="en">
<head>
  <title>Canadian National Soccer Association</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="{{ URL::asset('css/custom.css') }}">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">

    <h1 class="title">Canadian National Soccer Association</h1>
    <h1 class="title2">Canadian Interuniversity Sport</h1>

    <nav class="navbar navbar-inverse navbar-static-top">
      <div class="container-fluid left">
        <ul class="nav navbar-nav">
          <!--<li class="active">--><li><a href="/">Home</a></li>
          <li><a href="/persons">Directory</a></li>
          <li><a href="/positions">Positions</a></li>
          <li><a href="/teams">Teams</a></li>
          <li><a href="/players">Players</a></li>
          <li><a href="/coaches">Coaches</a></li>
          <li><a href="/games">Games</a></li>
          <li><a href="/organizations">Organizations</a></li>
          <li><a href="/schools">Schools</a></li>
          <li><a href="/stadiums">Stadiums</a></li>
          <li><a href="/contact">Contact Us</a></li>
        </ul>
      </div>
      <div class="container-fluid right">
        <ul class="nav navbar-nav">
          <li><a href="/login">Login</a></li>
        </ul>
      </div>
    </nav>

    <div class="content">

        @yield ('content')

    </div>

    @include ('layout.footer')

</div>

</body>
</html> 