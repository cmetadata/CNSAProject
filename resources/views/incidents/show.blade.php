@extends ('layout.header')

@section ('content')

  <h1 class="content-header grey-back">{{$incident->incidentDescription}}</h1>
    
    <!--Include a list of all players -->
    Players with this incident:<br/>
    @foreach ($players as $player)
      @include ('players.player')
      <br/>
    @endforeach    

  </div>

@endsection