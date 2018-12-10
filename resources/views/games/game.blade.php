<!--Diplays a single item from the database it display on the index page-->

<div>
    <div class='btn-toolbar pull-right'>
        <div class='btn-group'>
            <a class="btn btn-default edit-button grey-back" href="/games/{{$games->statId}}/edit">Edit</a>
            <a class="btn btn-default edit-button grey-back" href="#">Delete</a>
        </div>
    </div>
      <div class="object-div grey-back">
        <table width="100%">
        <tr>
            <td width="25%">Game ID: {{$game->statId}}</td>
            <td width="25%">Date: {{$game->gameDate}}</td>
            <td width="25%">Attendance: {{$game->gameAttendance}}</td>
            <td width="25%"><a href=#>Stadium: {{$stadium[$loop->index]->stadiumName}}</a></td>
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