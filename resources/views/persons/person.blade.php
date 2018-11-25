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
        
          <td width="33%">Person ID: {{$person->personId}}</td>
          <td width="33%"><a href="/persons/{{$person->personId}}">{{$person->personFirstName}} {{$person->personLastName}} </a> </td>
        
        </tr>
      </table>
    </div>
</div>