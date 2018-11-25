<!--Displays an object from the database and display it on the index-->

<div>
    <div class='btn-toolbar pull-right'>
        <div class='btn-group'>
            <button name="edit-button" type='button' class='btn btn-default edit-button grey-back'>Edit Person</button>
        </div>
    </div>
    <div class="object-div grey-back">
      <table width="100%">
        <tr>
        <a href="/persons/{{$person->personId}}">
            <td width="33%">Person ID: {{$person->personId}}</td>
            <td width="33%">{{$person->personFirstName}}</td>
            <td width="33%">{{$person->personLastName}}</td>
        </a>
        </tr>
      </table>
    </div>
</div>