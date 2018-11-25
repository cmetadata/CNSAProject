<!--Displays an object from the database and display it on the index-->

<div>
    <div class='btn-toolbar pull-right'>
        <div class='btn-group'>
            <button name="edit-button" type='button' class='btn btn-default edit-button grey-back'>Edit Scholarship</button>
        </div>
    </div>
    <div class="object-div grey-back">
      <table width="100%">
        <tr>
          <td width="50%"><a href="/incidents/{{$scholarship->scholarshipId}}">{{$scholarshipNames[$loop->index]->scholarshipName}}</a></td>
          <td width="50%"><a href="/incidents/{{$scholarship->scholarshipId}}">Scholarship Amount: ${{$scholarshipNames[$loop->index]->scholarshipAmount}}</a></td>
        </tr>
      </table>
    </div>
</div>