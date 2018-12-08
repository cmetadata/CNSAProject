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
            <td width="15%">Date {{$game[$loop->index]->gameDate}}</td>
            <td width="15%">Attendance {{$game[$loop->index]->gameAttendance}}</td>
            <td width="25%"><a href=#>Stadium {{$stadium[$loop->index]->stadiumName}}</a></td>
            <td width="45%" align="right"><a href=#>Team Name: </a></td>
            <td width="5%"></td>
            <td width="10%">Score</td>
        </tr>
        <tr>
            <td width="40%" colspan="2"></td>
            <td width="45%" align="right"><a href=#>Team Here:</a></td>
            <td width="5%"></td>
            <td width="10%">Score</td>
        </tr>
        </table>
      </div>
</div>