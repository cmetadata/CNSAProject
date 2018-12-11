<!--Diplays a single item from the database it display on the index page-->

<div>
    <div class='btn-toolbar pull-right'>
        <div class='btn-group'>
            <button name="edit-button" type='button' class='btn btn-default edit-button grey-back'>Edit</button>
        </div>
    </div>
    <div class='btn-toolbar pull-right'>
        <div class='btn-group'>

               <form method="POST" action="/games/{{$game->statId}}/delete">
                  {{ csrf_field() }}
                  <input id="statId" name="statId" type="hidden" value="{{$game->statId}}">
                  <button type="submit" class='btn btn-default edit-button grey-back' onclick="return confirm('Delete Game?')">Delete</button>
                </form>
            
        </div>
    </div>
      <div class="object-div grey-back">
        <table width="100%">
        <tr>
            
            <td width="25%"><a href="/games/{{$game->statId}}">Game ID: {{$game->statId}} </a></td>
            <td width="25%">Date: {{$game->gameDate}}</td>
            <td width="25%">Attendance: {{$game->gameAttendance}}</td>
            <td width="25%"><a href=#>Stadium: {{$stadium[$loop->index]->stadiumName}}</td>
        </tr>
        <tr>
            <td width="25%">Team 1: {{$teams1[$loop->index]->teamName}}</td>
            <td width="25%">Score: {{$gameStats[$loop->index]->get($index)->teamScore}}</td>


            <td width="25%">Team 2: {{$teams2[$loop->index]->teamName}}</td>
            <td width="25%">Score: {{$gameStats[$loop->index]->get($index+1)->teamScore}}</td>
        </tr>
        </table>
      </div>
</div>