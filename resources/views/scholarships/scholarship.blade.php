<!--Displays an object from the database and display it on the index-->

<div>
    <div class='btn-toolbar pull-right'>
        <div class='btn-group'>
            <button name="edit-button" type='button' class='btn btn-default edit-button grey-back'>Edit</button>
        </div>
    </div>
    <div class='btn-toolbar pull-right'>
        <div class='btn-group'>

                <form method="POST" action="/scholarships/{{$scholarship->scholarshipId}}/delete">
                  {{ csrf_field() }}
                  <input id="scholarshipId" name="scholarshipId" type="hidden" value="{{$scholarship->scholarshipId}}">
                  <button type="submit" class='btn btn-default edit-button grey-back'>Delete</button>
                </form>
            
        </div>
    </div>
    <div class="object-div grey-back">
      <table width="100%">
        <tr>
          <td width="25%"><a href="/scholarships/{{$scholarship->scholarshipId}}">Scholarship ID: {{$scholarshipNames[$loop->index]->scholarshipId}}</a></td>
          <td width="25%"><a href="/scholarships/{{$scholarship->scholarshipId}}">{{$scholarshipNames[$loop->index]->scholarshipName}}</a></td>
          <td width="25%"><a href="/scholarships/{{$scholarship->scholarshipId}}">Scholarship Amount: ${{$scholarshipNames[$loop->index]->scholarshipAmount}}</a></td>
          <td width="25%"><a href="/scholarships/{{$scholarship->scholarshipId}}">
          
          @isset($scholarships[$loop->index])
            {{$scholarships[$loop->index]->scholarshipDate}}
					@endisset

					@empty($scholarships[$loop->index])
						{{ $scholarships->first()->scholarshipDate }}
					@endempty

          

          </a></td>
        </tr>
      </table>
    </div>
</div>