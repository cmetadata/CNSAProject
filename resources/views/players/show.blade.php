@extends ('layout.header')

@section ('content')

  <h1 class="content-header grey-back">{{$player->firstName}} {{$player->lastName}}</h1>

  <div class=info-page>
  	{{$player->position}}<br/>
    <a href=#>Meh</a><br/>
    <a href=#>[School Name]</a>
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