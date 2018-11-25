@extends ('layout.header')

@section ('content')

  <h1 class="content-header grey-back">{{$person->personFirstName}} {{$person->personLastName}} </h1>
    
    <!--Include a list of all teams belonging to the school-->
    Positions for this person:<br/>
    @foreach ($positions as $position)
      @include ('positions.position')
      <br/>
    @endforeach

  </div>

@endsection