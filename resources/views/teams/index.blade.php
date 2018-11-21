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

  <hr/>

@include('teams.team')

@endsection