@extends ('layout.header')

@section ('content')

<div>
    <div>
        <div class='btn-toolbar pull-right'>
            <div class='btn-group'>
                <button type='button' class='btn btn-default new-button grey-back'>Add New Player</button>
            </div>
        </div>
         <h1 class="content-header grey-back">All Players</h1>
    </div>
</div>

<hr/>
<!--
  <div>
  <h1 class="content-header grey-back">All Players</h1>
  <div class='btn-toolbar pull-right'>
  <button type="submit" class="btn btn-default new-button" href="https://cnsa-project.herokuapp.com/players/create">Add New Player</button>
  </div>
  </div> -->

  <div class="object-div grey-back">
    <table width="100%">
    	<tr>
    		<td width="40%"><a href=#>Name Here</a></td>
    		<td width="50%"><a href=#>Team Here</a></td>
    		<td width="10%">Position Here</td>
    	</tr>
    </table>
  </div>

@endsection