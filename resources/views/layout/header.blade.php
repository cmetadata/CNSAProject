<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/custom.css">
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
          <li class="active"><a href="#">Home</a></li>
          <li><a href="#">Teams</a></li>
          <li><a href="#">Players</a></li>
          <li><a href="#">Games</a></li>
          <li><a href="#">Schools</a></li>
          <li><a href="#">Coaches</a></li>
          <li><a href="#">Stadiums</a></li>
        </ul>
      </div>
      <div class="container-fluid right">
        <ul class="nav navbar-nav">
          <li><a href="#">Login</a></li>
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