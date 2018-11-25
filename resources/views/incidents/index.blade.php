@extends ('layout.header')

@section ('content')

<div>
    <div class='btn-toolbar pull-right'>
        <div class='btn-group'>
            <a class="btn btn-default new-button grey-back" href="/incidents/create">Add New Incident</a>
        </div>
    </div>
     <h1 class="content-header grey-back">All Incidents</h1>
</div>
<hr/>

@foreach ($incidents as $incident)
	@include ('incidents.incident')
	<br/>
@endforeach

@endsection