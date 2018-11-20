@extends ('layout.header')

@section ('content')

<div>
    <div class='btn-toolbar pull-right'>
        <div class='btn-group'>
            <button name="create-button" type='button' class='btn btn-default new-button grey-back'>Add New Team</button>
        </div>
    </div>
     <h1 class="content-header grey-back">All Teams</h1>
</div>
<hr/>

@include('teams.team')

@endsection