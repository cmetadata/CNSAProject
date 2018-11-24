<!--Displays an object from the database and display it on the index-->

<div>
    <div class='btn-toolbar pull-right'>
        <div class='btn-group'>
            <button name="edit-button" type='button' class='btn btn-default edit-button grey-back'>Edit Organization</button>
        </div>
    </div>
    <div class="object-div grey-back">
      <table width="100%">
        <tr>
          <td width="50%"><a href="/schools/{{$organization->organizationId}}">{{$organization->organizationName}}</a></td>
          <td width="50%"><a href="/schools/{{$organization->organizationId}}">Organization Id: {{$organization->organizationId}}</a></td>
        </tr>
      </table>
    </div>
</div>