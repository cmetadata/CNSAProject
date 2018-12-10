<!--This displays a single item from the database, to be used in the index view.-->

<div>
    <div class='btn-toolbar pull-right'>
        <div class='btn-group'>
            <button name="edit-button" type='button' class='btn btn-default edit-button grey-back'>Edit</button>
        </div>
    </div>
    <div class='btn-toolbar pull-right'>
        <div class='btn-group'>

                <form method="POST" action="/players/{{$player->playerId}}/delete">
                  {{ csrf_field() }}
                  <input id="playerId" name="playerId" type="hidden" value="{{$player->playerId}}">
                  <button type="submit" class='btn btn-default edit-button grey-back'>Delete</button>
                </form>
            
        </div>
    </div>
	<div class="object-div grey-back">
	    <table width="100%">
	    	<tr>
				<td width="15%"><a href="/players/{{$player->playerId}}">Player ID: {{$player->playerId}}</a></td>

	    		<td width="20%"><a href="/players/{{$player->playerId}}">
				
				@isset($person[$loop->index])
						{{ $person[$loop->index]->personFirstName }}
						{{ $person[$loop->index]->personLastName }}
				@endisset

				@empty($person[$loop->index])
						{{ $person->first()->personFirstName }}
						{{ $person->first()->personLastName }}
				@endempty
				
				</a></td>
	    		
				<td width="25%"><a href="/teams/@isset($team[$loop->index])
						{{ $team[$loop->index]->teamId }}
					@endisset
					
					@empty($team[$loop->index])
						{{ $team->first()->teamId }}
					@endempty
					">
				
					@isset($team[$loop->index])
						{{ $team[$loop->index]->teamName }}
					@endisset

					@empty($team[$loop->index])
						{{ $team->first()->teamName }}
					@endempty
				</a></td>
				<td width="25%"><a href="/schools/{{$school[$loop->index]->schoolId}}">{{$school[$loop->index]->schoolName}}</a></td>
	    		<td width="15%">{{$player->position}}</td>
	    	</tr>
	    </table>
	</div>
</div>