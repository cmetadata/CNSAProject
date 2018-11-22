@extends ('layout.header')

@section ('content')

  <h1 class="content-header grey-back">{{$player->firstName}} {{$player->lastName}}</h1>

  <div class=info-page>
  	{{$player->position}}<br/>
    <a href="/teams/{{$team->teamId}}">{{$team->teamName}}</a><br/>
    <a href="/schools/{{$school->schoolId}}">{{$school->schoolName}}</a>
    <br/></br/>
    Rating: {{$player->playerRating}}<br/>
    Joined in: {{$player->yearEntered}}<br/>
    <br/>
    Goals: {{$player->goals}}<br/>
    Saves: {{$player->saves}}<br/>
    Assists: {{$player->assists}}<br/>
    <br/>
    Red Cards: {{$player->redCards}}<br/>
    Yellow Cards: {{$player->yellowCards}}<br/>
  </div>

@endsection