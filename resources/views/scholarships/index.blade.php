@extends ('layout.header')

@section ('content')

<div>
    <div class='btn-toolbar pull-right'>
        <div class='btn-group'>
            <a class="btn btn-default new-button grey-back" href="/scholarships/create">Add New Scholarship</a>
        </div>
    </div>
     <h1 class="content-header grey-back">All Scholarships</h1>
</div>
<hr/>

@foreach ($scholarships as $scholarship)
	@include ('scholarships.scholarship')
	<br/>
@endforeach

@endsection