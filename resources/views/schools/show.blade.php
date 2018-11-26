@extends ('layout.header')

@section ('content')

  <h1 class="content-header grey-back">{{$school->schoolName}}</h1>

    <div class=info-page>
    Rating: {{$school->schoolRanking}}<br/>
    <br/>

    <!--Include a list of all teams belonging to the school-->
    Teams for this school:<br/>
    @foreach ($teams as $team)
      @include ('teams.team')
      <br/>
    @endforeach

  </div>

@endsection