@extends ('layout.header')

@section ('content')

<div>
    <div class='btn-toolbar pull-right'>
        <div class='btn-group'>
            <button name="create-button" type='button' class='btn btn-default new-button grey-back'>Add New School</button>
        </div>
    </div>
     <h1 class="content-header grey-back">All Schools</h1>
</div>
<hr/>
<div>
    <div class='btn-toolbar pull-right'>
        <div class='btn-group'>
            <button name="edit-button" type='button' class='btn btn-default edit-button grey-back'>Edit School</button>
        </div>
    </div>
    <div class="object-div grey-back">
      <table width="100%">
        <tr>
          <td width="50%"><a href=#>School Name</a></td>
          <td width="25%">High School Athletes?</td>
          <td width="25%">School Ranking: 0</td>
        </tr>
      </table>
    </div>
</div>

@endsection