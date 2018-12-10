@extends ('layout.header')

@section ('content')

  <h1 class="content-header grey-back">{{$person->personFirstName}} {{$person->personLastName}}</h1>

  {!!Form:open(['action' => ['PersonsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
    {{Form::hidden('_method', 'DELETE')}}
    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
  {!!Form::close()!!}

  <div class=info-page>
  	{{$player->position}}<br/>
    <a href="/teams/{{$team->teamId}}">{{$team->teamName}}</a><br/>
    <a href="/schools/{{$school->schoolId}}">{{$school->schoolName}}</a>
    <br/></br/>
    Rating: {{$player->playerRating}}<br/>
    Joined in: {{$player->yearEntered}}<br/>
    High School: {{$player->highSchool}}<br/>
    <br/>
    Goals: {{$goals}}<br/>
    Saves: {{$saves}}<br/>
    Assists: {{$assists}}<br/>
    <br/>
    Red Cards: {{$redCard}}<br/>
    Yellow Cards: {{$yellowCard}}<br/>
  </div>

    <!--Include a list of all teams belonging to the school-->
    <br/>Incidents for this player:<br/>
    @foreach ($incidents as $incident)
      @include ('incidents.incident')
      <br/>
    @endforeach


    <!--Include a list of all teams belonging to the school-->
    <br/>Injuries for this player:<br/>
    @foreach ($injuries as $injury)
      @include ('injuries.injury')
      <br/>
    @endforeach


    <!--Include a list of all teams belonging to the school-->
    <br/>Scholarships for this player:<br/>
    @foreach ($scholarships as $scholarship)
      @include ('scholarships.scholarship')
      <br/>
    @endforeach


@endsection