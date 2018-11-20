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
<!-- =======
<div>
    <div class='btn-toolbar pull-right'>
        <div class='btn-group'>
            <button name="create-button" type='button' class='btn btn-default new-button grey-back'>Add New Team</button>
        </div>
    </div>
     <h1 class="content-header grey-back">All Teams</h1>
</div>
<hr/>
>>>>>>> 1d118259ef315429b7df28c883ff8ce83e5441ed
 -->
@include('teams.team')

@endsection