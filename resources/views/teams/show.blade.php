@extends ('layout.header')

@section ('content')

  <h1 class="content-header grey-back">{{$team->first()->teamName}}</h1>

  <a class="btn btn-default edit-button grey-back" href="#">Edit Team</a>
  <a class="btn btn-default edit-button grey-back" href="#">Delete Team</a>
  <br/>
  <p>
						{{ $school[0]->schoolName }}
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