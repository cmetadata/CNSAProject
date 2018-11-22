<!--puts a team in the index blah blah blah-->

<div>
    <div class='btn-toolbar pull-right'>
        <div class='btn-group'>
            <button name="edit-button" type='button' class='btn btn-default edit-button grey-back'>Edit Team</button>
        </div>
    </div>
    <div class="object-div grey-back">
      <table width="100%">
        <tr>
          <td width="40%"><a href="/teams/{{$teams->teamId}}">{{$team->teamName}} </a></td>
	    		<td width="10%">{{$player->position}}</td>
        </tr>
      </table>
    </div>
</div>