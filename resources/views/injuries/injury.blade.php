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
          <td width="50%"><a href="/injuries/{{$injury->injuryId}}">{{$injuryNames[$loop->index]->injury}}</a></td>
          <td width="50%"><a href="/injuries/{{$injury->injuryId}}">{{$injuries[$loop->index]->injuryDate}}</a></td>
        </tr>
      </table>
    </div>
</div>