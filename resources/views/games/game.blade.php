<!--Diplays a single item from the database it display on the index page-->

<div>
    <div class='btn-toolbar pull-right'>
        <div class='btn-group'>
            <button name="edit-button" type='button' class='btn btn-default edit-button grey-back'>Edit Game</button>
        </div>
    </div>
      <div class="object-div grey-back">
        <table width="100%">
        <tr>
            <td width="25%">Game ID {{$game[$loop->index]->gameId}}</td>
            <td width="25%">Date {{$game[$loop->index]->gameDate}}</td>
            <td width="25%">Attendance {{$game[$loop->index]->gameAttendance}}</td>
            <td width="25%"><a href=#>Stadium {{$stadium[$loop->index]->stadiumName}}</a></td>
        </tr>
        </table>
      </div>
</div>