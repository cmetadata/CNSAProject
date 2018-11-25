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
            <td width="16%">Team: {{$position->teamId}}</td>
            <td width="16%">Position ID: {{$position->positionId}}</td>
            <td width="16%">Position Name: {{$position->positionDescription}}</td>
            <td width="16%">Person Name: {{$person->personFirstName}}  {{$person->personLastName}}</td>
            <td width="16%">Start Date: {{$position->positionStartDate}}</td>
            <td width="16%">End Date: {{$position->positionEndDate}}</td>
        </tr>
      </table>
    </div>
</div>