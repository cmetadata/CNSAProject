<!--Displays an object from the database and display it on the index-->

<div>
    <div class='btn-toolbar pull-right'>
        <div class='btn-group'>
            <button name="edit-button" type='button' class='btn btn-default edit-button grey-back'>Edit position</button>
        </div>
    </div>
    <div class="object-div grey-back">
      <table width="100%">
        <tr>
            <td width="10%">Person ID: {{$position->personId}}</td>
            <td width="10%">Team ID: {{$position->teamId}}</td>
            <td width="20%">Position ID: {{$position->positionId}}</td>
            <td width="20%">{{$position->positionDescription}}</td>
            <td width="25%">{{$position->positionStartDate}}</td>
            <td width="15%">{{$position->positionEndDate}}</td>
        </tr>
      </table>
    </div>
</div>