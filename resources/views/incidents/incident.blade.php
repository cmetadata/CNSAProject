<!--Displays an object from the database and display it on the index-->

<div>
    <div class='btn-toolbar pull-right'>
        <div class='btn-group'>
            <button name="edit-button" type='button' class='btn btn-default edit-button grey-back'>Edit</button>
        </div>
    </div>
    <div class='btn-toolbar pull-right'>
        <div class='btn-group'>

                <form method="POST" action="/incidents/{{$incident->incidentId}}/delete">
                  {{ csrf_field() }}
                  <input id="incidentId" name="incidentId" type="hidden" value="{{$incident->incidentId}}">
                  <button type="submit" class='btn btn-default edit-button grey-back' onclick="return confirm('Delete Incident?')">Delete</button>
                </form>
            
        </div>
    </div>
    <div class="object-div grey-back">
      <table width="100%">
        <tr>
            <td width="33%"><a href="/incidents/{{$incident->incidentId}}">Incident ID: {{$incident->incidentId}}</a></td>
            <td width="33%"><a href="/incidents/{{$incident->incidentId}}">{{$incidentNames[$loop->index]->incidentDescription}}</a></td>
            <td width="33%"><a href="/incidents/{{$incident->incidentId}}">{{$incident->incidentDate}}</a></td>
        </tr>
      </table>
    </div>
</div>