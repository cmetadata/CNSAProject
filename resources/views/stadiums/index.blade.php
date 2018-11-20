@extends ('layout.header')

@section ('content')

<div>
    <div class='btn-toolbar pull-right'>
        <div class='btn-group'>
            <button name="create-button" type='button' class='btn btn-default new-button grey-back'>Add New Stadium</button>
        </div>
    </div>
     <h1 class="content-header grey-back">All Stadiums</h1>
</div>
<hr/>
<div>
    <div class='btn-toolbar pull-right'>
        <div class='btn-group'>
            <button name="edit-button" type='button' class='btn btn-default edit-button grey-back'>Edit Stadium</button>
        </div>
    </div>
    <div class="object-div grey-back">
      <table width="100%">
        <tr>
          <td width="80%"><a href=#>Stadium Name</a></td>
    		<td width="20%">Maximum Attendance</td>
        </tr>
      </table>
    </div>
</div>

@endsection