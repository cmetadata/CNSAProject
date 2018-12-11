@extends ('layout.header')

@section ('content')

  <!--This page needs work... and idk why things are different sizes-->
  <h1 class="content-header grey-back">{{$teamName1->teamName}} vs {{$teamName2->teamName}}</h1>
  <br/>
	<p>Date: {{$game->gameDate}}<br/>
     Stadium: {{$stadium->stadiumName}}</p><br/>

  <table width="100%">
  	<tr>
  		<td width="50%">{{$teamName1->teamName}}</td>
  		<td width="50%">{{$teamName2->teamName}}</td>
  	</tr>
  	<tr>
		<td width="50%">
		@foreach ($playerStatsTeam1 as $stat1)

			<p> Player ID: {{$stat1->playerId}} </p>
			<p> Goals: {{$stat1->goals}} </p>
			<p> Assists: {{$stat1->assists}} </p>
			<p> Saves: {{$stat1->saves}} </p>
			<p> RedCard: {{$stat1->redCard}} </p>
			<p> YellowCard: {{$stat1->yellowCard}} </p>
			<br/>

		@endforeach
		</td>
		<td width="50%">
		@foreach ($playerStatsTeam2 as $stat2)

			<p> Player ID: {{$stat2->playerId}} </p>
			<p> Goals: {{$stat2->goals}} </p>
			<p> Assists: {{$stat2->assists}} </p>
			<p> Saves: {{$stat2->saves}} </p>
			<p> RedCard: {{$stat2->redCard}} </p>
			<p> YellowCard: {{$stat2->yellowCard}} </p>
			<br/>

		@endforeach
		</td>
  	</tr>
  </table>

	Injuries:

		@foreach ($injuries as $injury)
			<br/>
			Player ID: {{ $injury->playerId }}
			<br/>
			Injury Type: {{$injuryNames[$loop->index]->injury}} 
		@endforeach

@endsection