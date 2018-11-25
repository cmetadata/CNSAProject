@extends ('layout.header')

@section ('content')

  <h1 class="content-header grey-back">{{$scholarship->scholarshipName}}</h1>
    
    <!--Include a list of all players -->
    Players with this scholarship:<br/>
    @foreach ($players as $player)
      @include ('players.player')
      <br/>
    @endforeach    

  </div>

@endsection