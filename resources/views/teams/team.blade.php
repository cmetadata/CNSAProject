<!--puts a team in the index blah blah blah-->

<div>
    <div class='btn-toolbar pull-right'>
        <div class='btn-group'>
            <a class="btn btn-default edit-button grey-back" href="/players/{{$team->teamId}}/edit">Edit</a>
        </div>
    </div>
    <div class='btn-toolbar pull-right'>
        <div class='btn-group'>

                <form method="POST" action="/teams/{{$team->teamId}}/delete">
                  {{ csrf_field() }}
                  <input id="teamId" name="teamId" type="hidden" value="{{$team->teamId}}">
                  <button type="submit" class='btn btn-default edit-button grey-back'>Delete</button>
                </form>
            
        </div>
    </div>
    <div class="object-div grey-back">
      <table width="100%">
        <tr>
            <td width="50%"><a href="/teams/{{$team->teamId}}">Team ID: {{$team->teamId}} </a></td>
            <td width="50%"><a href="/teams/{{$team->teamId}}">{{$team->teamName}} </a></td>
        </tr>
      </table>
    </div>
</div>