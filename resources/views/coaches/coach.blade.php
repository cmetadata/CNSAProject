<!--Displays one record from the database for the index page-->
{{--$team = Team::find($coach->teamId);--}}
<div>
    <div class='btn-toolbar pull-right'>
        <div class='btn-group'>
            <button name="edit-button" type='button' class='btn btn-default edit-button grey-back'>Edit Coach</button>
        </div>
    </div>
	  <div class="object-div grey-back">
	    <table width="100%">
	    	<tr>
	    		<td width="50%"><a href="/coaches/{{$coach->managerId}}">{{$coach->firstName}} {{$coach->lastName}}</a></td>
    		    <td width="50%"><a href=#>{{--$team->teamName--}}Team Here</a></td>
	    	</tr>
	    </table>
	  </div>
</div>