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
	    		<td width="40%"><a href=#>{{$player->firstName}} {{$player->lastName}}</a></td>
	    		<td width="50%"><a href=#>Team Here</a></td>
	    		<td width="10%">{{$player->position}}</td>
	    	</tr>
	    </table>
	</div>
</div>