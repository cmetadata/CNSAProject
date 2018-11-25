@extends ('layout.header')

@section ('content')

<div>
    <div class='btn-toolbar pull-right'>
        <div class='btn-group'>
            <a class="btn btn-default new-button grey-back" href="/positions/create">Add New Position</a>
        </div>
    </div>
     <h1 class="content-header grey-back">Directory</h1>
</div>
<hr/>

@foreach ($positions as $position)
	@include ('positions.position')
	<br/>
@endforeach

@endsection