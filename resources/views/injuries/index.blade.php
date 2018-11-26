@extends ('layout.header')

@section ('content')

<div>
    <div class='btn-toolbar pull-right'>
        <div class='btn-group'>
            <a class="btn btn-default new-button grey-back" href="/injuries/create">Add New Injury</a>
        </div>
    </div>
     <h1 class="content-header grey-back">All Injuries</h1>
</div>
<hr/>

@foreach ($injuries as $injury)
	@include ('injuries.injury')
	<br/>
@endforeach

@endsection