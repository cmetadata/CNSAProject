@extends ('layout.header')

@section ('content')

<div>
    <div class='btn-toolbar pull-right'>
        <div class='btn-group'>
            <a class="btn btn-default new-button grey-back" href="/managers/create">Add New Manager</a>
        </div>
    </div>
     <h1 class="content-header grey-back">All Managers</h1>
</div>
<hr/>

@foreach ($managers as $manager)
	@include ('managers.manager')
	<br/>
@endforeach

@endsection