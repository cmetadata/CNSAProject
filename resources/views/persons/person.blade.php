<!--Displays an object from the database and display it on the index-->

<div>
    <div class='btn-toolbar pull-right'>
        <div class='btn-group'>
            <a class="btn btn-default edit-button grey-back" href="/persons/edit">Edit Player</a>
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