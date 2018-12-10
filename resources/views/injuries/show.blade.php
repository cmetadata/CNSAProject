@extends ('layout.header')

@section ('content')

  <h1 class="content-header grey-back">{{$injury->injury}}</h1>

  {!!Form:open(['action' => ['PersonsController@destroy', $post->id], 'method' => 'POST', 'class' => 'pull-right'])!!}
    {{Form::hidden('_method', 'DELETE')}}
    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
  {!!Form::close()!!}
    
    <!--Include a list of all players -->
    Players with this injury:<br/>
    @foreach ($players as $player)
      @include ('players.player')
      <br/>
    @endforeach    

  </div>

@endsection