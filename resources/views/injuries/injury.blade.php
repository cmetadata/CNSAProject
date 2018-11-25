<!--Displays an object from the database and display it on the index-->

<div>
    <div class='btn-toolbar pull-right'>
        <div class='btn-group'>
            <button name="edit-button" type='button' class='btn btn-default edit-button grey-back'>Edit Incident</button>
        </div>
    </div>
    <div class="object-div grey-back">
      <table width="100%">
        <tr>
            <td width="33%"><a href="/incidents/{{$injury->injuryId}}">Injury ID: {{$injury->injuryId}}</a></td>
          <td width="33%"><a href="/incidents/{{$injury->injuryId}}">{{$injury->injury}}</a></td>
          <td width="33%"><a href="/incidents/{{$injury->injuryId}}">{{$injury->injuryDate}}</a></td>
        </tr>
      </table>
    </div>
</div>