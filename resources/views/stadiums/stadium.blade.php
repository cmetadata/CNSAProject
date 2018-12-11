<div>
    <div class='btn-toolbar pull-right'>
        <div class='btn-group'>
            <a class="btn btn-default edit-button grey-back" href="/stadiums/{{$stadium->stadiumId}}/edit">Edit</a>
        </div>
    </div>
    <div class='btn-toolbar pull-right'>
        <div class='btn-group'>

                <form method="POST" action="/stadiums/{{$stadium->stadiumId}}/delete">
                  {{ csrf_field() }}
                  <input id="stadiumId" name="stadiumId" type="hidden" value="{{$stadium->stadiumId}}">
                  <button type="submit" class='btn btn-default edit-button grey-back' onclick="return confirm('Delete Stadium?')">Delete</button>
                </form>
            
        </div>
    </div>
    <div class="object-div grey-back">
      <table width="100%">
        <tr>
            <td width="33%"><a href=#>Stadium ID: {{$stadium->stadiumId}}</a></td>
            <td width="33%"><a href=#>{{$stadium->stadiumName}}</a></td>
            <td width="33%">{{$stadium->stadiumCapacity}}</td>
        </tr>
      </table>
    </div>
</div>