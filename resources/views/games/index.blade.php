@extends ('layout.header')

@section ('content')

<div>
    <div class='btn-toolbar pull-right'>
        <div class='btn-group'>
            <a class="btn btn-default new-button grey-back" href="/games/create">Add New Game</a>
        </div>
    </div>
     <h1 class="content-header grey-back">All Games</h1>
</div>
<hr/>

{{ $index = 0 }}

@foreach ($games as $game)

    @if (($index % 2) == 1)
        {{ $index += 1 }} 
    @endif


	@include ('games.game', compact('index'))
	<br/>

    {{ $index += 1 }}
@endforeach

@endsection