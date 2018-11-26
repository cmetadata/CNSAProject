@extends ('layout.header')

@section ('content')

  <h1 class="content-header grey-back">{{$person->personFirstName}} {{$person->personLastName}}</h1>

  <div class=info-page>
  	{{$player->position}}<br/>
    <a href="/teams/{{$team->teamId}}">{{$team->teamName}}</a><br/>
    <a href="/schools/{{$school->schoolId}}">{{$school->schoolName}}</a>
    <br/></br/>
    Rating: {{$player->playerRating}}<br/>
    Joined in: {{$player->yearEntered}}<br/>
    High School: {{$player->highSchool}}<br/>
    <br/>
    Goals: {{$player->goals}}<br/>
    Saves: {{$player->saves}}<br/>
    Assists: {{$player->assists}}<br/>
    <br/>
    Red Cards: {{$player->redCards}}<br/>
    Yellow Cards: {{$player->yellowCards}}<br/>
  </div>

    <!--Include a list of all teams belonging to the school-->
    Incidents for this player:<br/>
    @foreach ($incidents as $incident)
      @include ('incidents.incident')
      <br/>
    @endforeach


    <!--Include a list of all teams belonging to the school-->
    Injuries for this player:<br/>
    @foreach ($injuries as $injury)
      @include ('injuries.injury')
      <br/>
    @endforeach


    <!--Include a list of all teams belonging to the school-->
    Scholarships for this player:<br/>
    @foreach ($scholarships as $scholarship)
      @include ('scholarships.scholarship')
      <br/>
    @endforeach


@endsection