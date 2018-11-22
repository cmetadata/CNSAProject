@extends ('layout.header')

@section ('content')

<div>
    <div class='btn-toolbar pull-right'>
        <div class='btn-group'>
            <a class="btn btn-default new-button grey-back" href="/schools/create">Add New School</a>
        </div>
    </div>
     <h1 class="content-header grey-back">All Schools</h1>
</div>
<hr/>

@foreach ($schools as $school)
	@include ('schools.school')
	<br/>
@endforeach

@endsection