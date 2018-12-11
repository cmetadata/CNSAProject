@extends ('layout.header')

@section ('content')

  <h1 class="content-header grey-back">{{$team->first()->teamName}}</h1>
  <br/>
  <p>
						{{ $school->schoolName }}
  </p>

    <div class=info-page>
    <!-- players -->
    @foreach ($players as $player)
      @include ('players.player')
      <br/>
    @endforeach
    <br/></br/>
  </div>

@endsection