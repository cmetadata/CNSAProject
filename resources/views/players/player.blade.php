<!--This displays a single item from the database, to be used in the index view.-->

<div>
    <div class='btn-toolbar pull-right'>
        <div class='btn-group'>
            <button name="edit-button" type='button' class='btn btn-default edit-button grey-back'>Edit Player</button>
        </div>
    </div>
	<div class="object-div grey-back">
	    <table width="100%">
	    	<tr>
	    		<td width="25%"><a href="/players/{{$player->playerId}}">{{$player->firstName}} {{$player->lastName}}</a></td>
	    		<td width="25%"><a href="/teams/@isset($team[$loop->index])
						{{ $team[$loop->index]->teamName }}
					@endisset">
				
					@isset($team[$loop->index])
						{{ $team[$loop->index]->teamName }}
					@endisset

				</a></td>
				<td width="25%"><a href="/schools/{{$school[$loop->index]->schoolId}}">{{$school[$loop->index]->schoolName}}</a></td>
	    		<td width="25%">{{$player->position}}</td>
	    	</tr>
	    </table>
	</div>
</div>