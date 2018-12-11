@extends ('layout.header')

@section ('content')

  <h1 class="content-header grey-back">{{$injury->injury}}</h1>
  
    <!--Include a list of all players -->
    Players with this injury:<br/>
    @foreach ($players as $player)
      @include ('players.player')
      <br/>
    @endforeach    

  </div>

@endsection