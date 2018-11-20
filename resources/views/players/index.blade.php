@extends ('layout.header')

@section ('content')

<div>
    <div class='btn-toolbar pull-right'>
        <div class='btn-group'>
            <button name="create-button" type='button' class='btn btn-default new-button grey-back'>Add New Player</button>
        </div>
    </div>
     <h1 class="content-header grey-back">All Players</h1>
</div>
<hr/>


{{--This will be how we do it once we have actual data.
@foreach ($players as $player)
	@include ('player')
@endforeach --}}

@include('players.player')

@endsection