<!--Displays an object from the database and display it on the index-->

<div>
    <div class='btn-toolbar pull-right'>
        <div class='btn-group'>
            <button name="edit-button" type='button' class='btn btn-default edit-button grey-back'>Edit Injury</button>
        </div>
    </div>
    <div class='btn-toolbar pull-right'>
        <div class='btn-group'>

<!--                 {!!Form::open(['action' => ['InjuriesController@destroy', $injuryNames[$loop->index]->injuryId], 'method' => 'POST', 'class' => 'pull-right'])!!}
                   {{Form::hidden('_method', 'DELETE')}}
                   {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                {!!Form::close()!!} -->

                <form method="POST" action="/injuries/{{$injuryNames[$loop->index]->injuryId}}/delete">
                  {{ csrf_field() }}
                  <input id="injuryId" name="injuryId" type="hidden" value="{{$injuryNames[$loop->index]->injuryId}}">
                  <button type="submit" class='btn btn-default edit-button grey-back'>Delete</button>
                </form>
            
        </div>
    </div>
    <div class="object-div grey-back">
      <table width="60%">
        <tr>
          <td width="33%"><a href="/injuries/{{$injury->injuryId}}">Injury ID: {{$injuryNames[$loop->index]->injuryId}}</a></td>
          <td width="33%"><a href="/injuries/{{$injury->injuryId}}">Injury Type: {{$injuryNames[$loop->index]->injury}}</a></td>
          <td width="33%"><a href="/injuries/{{$injury->injuryId}}">{{$injuries[$loop->index]->injuryDate}}</a></td>
        </tr>
      </table>
    </div>
</div>