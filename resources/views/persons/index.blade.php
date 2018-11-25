@extends ('layout.header')

@section ('content')

<div>
    <div class='btn-toolbar pull-right'>
        <div class='btn-group'>
            <a class="btn btn-default new-button grey-back" href="/persons/create">Add New Person</a>
        </div>
    </div>
     <h1 class="content-header grey-back">Directory</h1>
</div>
<hr/>

@foreach ($persons as $person)
	@include ('persons.person')
	<br/>
@endforeach

@endsection