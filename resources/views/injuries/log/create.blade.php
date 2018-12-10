@extends ('layout.header')

@section ('content')

    <form method="POST" action="/injuries_log">

        {{ csrf_field() }}

        <div class="parent-div"> 
        
        <div class="login-form">

        <h1 class="title2 grey-back">Register Player Injury</h1>
        
        <div class="grey-back buffer">

            <div class="form-group">
                <label for="playerId">Player Id:</label>
                <input type="text" class="form-control" id="playerId" name="playerId" required>
            </div>

            <div class="form-group">
                <label for="injuryId">Injury Id:</label>
                <input type="text" class="form-control" id="injuryId" name="injuryId" required>
            </div>

            <div class="form-group">
                <label for="gameId">Game Id:</label>
                <input type="text" class="form-control" id="gameId" name="gameId" required>
            </div>
            

            <div class="form-group">
                <label for="injuryDate">Injury Date:</label>
                <input type="date" class="form-control" id="injuryDate" name="injuryDate" required>
            </div>                        

            <button type="submit" class="btn btn-default">Submit</button>

        </div>

        </div>

        </div>

    </form> 


@endsection
