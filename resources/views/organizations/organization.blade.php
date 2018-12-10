<!--Displays an object from the database and display it on the index-->

<div>
    <div class='btn-toolbar pull-right'>
        <div class='btn-group'>
            <a class="btn btn-default edit-button grey-back" href="/organizations/{{$organization->organizationId}}/edit">Edit</a>
        </div>
        <div class='btn-group'>

                <form method="POST" action="/organizations/{{$organization->organizationId}}/delete">
                  {{ csrf_field() }}
                  <input id="organizationId" name="organizationId" type="hidden" value="{{$organization->organizationId}}">
                  <button type="submit" class='btn btn-default edit-button grey-back'>Delete</button>
                </form>
            
        </div>
    </div>
    <div class="object-div grey-back">
      <table width="100%">
        <tr>
          <td width="50%"><a href="/organizations/{{$organization->organizationId}}">{{$organization->organizationName}}</a></td>
          <td width="50%"><a href="/organizations/{{$organization->organizationId}}">Organization ID: {{$organization->organizationId}}</a></td>
        </tr>
      </table>
    </div>
</div>