@extends ('layout.header')

@section ('content')

  <h1 class="content-header grey-back">{{$teams->teamName}}</h1>

    <div class=info-page>
      <a href=/schools/{{$school->schoolId}}> {{$school->schoolName }} </a>
    <br/></br/>
  </div>

@endsection