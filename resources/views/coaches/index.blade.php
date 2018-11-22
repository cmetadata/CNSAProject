@extends ('layout.header')

@section ('content')

<div>
    <div class='btn-toolbar pull-right'>
        <div class='btn-group'>
            <a class="btn btn-default new-button grey-back" href="/coaches/create">Add New Coach</a>
        </div>
    </div>
     <h1 class="content-header grey-back">All Coaches</h1>
</div>
<hr/>

@foreach ($coaches as $coach)
	@include ('coaches.coach')
	<br/>
@endforeach

@endsection