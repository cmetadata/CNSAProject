@extends ('layout.header')

@section ('content')

  <div>
    <div class='btn-toolbar pull-right'>
        <div class='btn-group'>
            <a class="btn btn-default new-button grey-back" href="/teams/create">Add New Team</a>        
        </div>
    </div>
    
</div>

  <h1 class="content-header grey-back">All Teams</h1>

  <div class="object-div grey-back">
    <table width="100%">
    	<tr>
    		<td width="50%"><a href=#>Team Name Here</a></td>
    		<td width="40%"><a href=#>Associated School</a></td>
    		<td width="10%">NumPlayers</td>
    	</tr>
    </table>
  </div>

@endsection