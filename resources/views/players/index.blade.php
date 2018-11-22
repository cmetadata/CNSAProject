@extends ('layout.header')

@section ('content')

<div>
    <div class='btn-toolbar pull-right'>
        <div class='btn-group'>
            <a class="btn btn-default new-button grey-back" href="/players/create">Add New Player</a>
        </div>
    </div>
     <h1 class="content-header grey-back">All Players</h1>
</div>
<hr/>

@foreach ($players as $player)

    $team = Team::find($player->teamId);
    $school = School::find($team->schoolId);

	@include ('players.player')
	<br/>
@endforeach

@endsection