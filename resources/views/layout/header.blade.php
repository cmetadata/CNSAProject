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

    <div class="navbar">

      <a href="/">Home</a>
      <a href="/organizations">Organizations</a>
      <a href="/persons">Directory</a>
      <a href="/schools"> Schools </a>
      <a href="/stadiums"> Stadiums </a>
      <a href="/teams"> Teams </a>

      <div class="dropdown">
        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Players
        <span class="caret"></span></button>
        <ul class="dropdown-menu">
          <li><a href="/players">Players List</a></li>
          <li><a href="/injuries_log/create"> Report Injury </a></li>
          <li><a href="/scholarships_log/create"> Report Scholarship</a></li>
          <li><a href="/incidents_log/create"> Report Incident</a></li>
        </ul>
      </div>       


      <div class="dropdown">
        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Admin Utilities
        <span class="caret"></span></button>
        <ul class="dropdown-menu">
            <li><a href="/injuries/create">New Injury</a></li>
            <li><a href="/scholarships/create">New Scholarship</a></li>
            <li><a href="/incidents/create">New Incident</a></li>
        </ul>
      </div>       

      <a href="/positions">Positions</a>
      <a href="/coaches">Coaches</a>
      <a href="/games">Games</a>
      <a href="/contact">Contact Us</a>
        
      <div class="container-fluid right">
        <ul class="nav navbar-nav">
          <li><a href="/login">Login</a></li>
        </ul>
      </div>


    </div> 

    <div class="content">

        @yield ('content')

    </div>

    @include ('layout.footer')

</div>

</body>
</html> 