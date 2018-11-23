@extends ('layout.header')

@section ('content')

  <h1 class="content-header grey-back">{{$team->teamName}}</h1>

    <div class=info-page>
    <!-- players -->
    @foreach ($players as $player)
      @include ('players.player')
      <br/>
    @endforeach
    <br/></br/>
  </div>

@endsection