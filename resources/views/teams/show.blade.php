@extends ('layout.header')

@section ('content')

  <h1 class="content-header grey-back">{{$teams->teamName}}</h1>

    <div class=info-page>
    {{ $teams->teamRanking }} 
    <br/></br/>
  </div>

@endsection