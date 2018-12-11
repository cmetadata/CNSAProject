<!--Displays an object from the database and display it on the index-->

<div>
    <div class='btn-toolbar pull-right'>
        <div class='btn-group'>
            <a class="btn btn-default edit-button grey-back" href="/schools/{{$school->schoolId}}/edit">Edit</a>
        </div>
    </div>
    <div class='btn-toolbar pull-right'>
        <div class='btn-group'>

                <form method="POST" action="/schools/{{$school->schoolId}}/delete">
                  {{ csrf_field() }}
                  <input id="schoolId" name="schoolId" type="hidden" value="{{$school->schoolId }}">
                  <button type="submit" class='btn btn-default edit-button grey-back'>Delete</button>
                </form>
            
        </div>
    </div>
    <div class="object-div grey-back">
      <table width="100%">
        <tr>
          <td width="25%">School ID: {{$school->schoolId }} </td>
          <td width="25%"><a href="/schools/{{$school->schoolId}}">{{$school->schoolName}}</a></td>
          <td width="25%">School Population: {{$school->schoolPopulation}} </td>
          <td width="25%">School Rating: {{$school->schoolRanking}}</td>
        </tr>
      </table>
    </div>
</div>