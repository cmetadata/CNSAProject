@extends ('layout.header')

@section ('content')

  <h1 class="content-header grey-back">{{$organization->organizationName}}</h1>

    <div class=info-page>
    Organization: {{$organization->organizationName}}<br/>
    <br/>

    
    <!--Include a list of all teams belonging to the school-->
    Schools for this organization:<br/>
    @foreach ($schools as $school)
      @include ('schools.school')
      <br/>
    @endforeach

  </div>

@endsection