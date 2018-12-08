@extends ('layout.header')

@section ('content')

    <form method="POST" action="/player_stat">

        {{ csrf_field() }}

        <div class="parent-div"> 
        
        <div class="login-form">

        <h1 class="title2 grey-back">Register Player Game Stat</h1>
        
        <div class="grey-back buffer">

            <div class="form-group">
                <label for="goals">Goals:</label>
                <input type="text" class="form-control" id="goals" name="goals" required>
            </div>

            <div class="form-group">
                <label for="saves">Saves:</label>
                <input type="text" class="form-control" id="saves" name="saves" required>
            </div>            

            <div class="form-group">
                <label for="assists">Saves:</label>
                <input type="text" class="form-control" id="assists" name="assists" required>
            </div>            

            <div class="form-group">
                <label for="redCard">Redcards:</label>
                <input type="text" class="form-control" id="redCard" name="redCard" required>
            </div>            

            <div class="form-group">
                <label for="yellowCard">Yellowcards:</label>
                <input type="text" class="form-control" id="yellowCard" name="yellowCard" required>
            </div>            

            <div class="form-group">
                <label for="gameId">Game ID:</label>
                <input type="text" class="form-control" id="gameId" name="gameId" required>
            </div>            

            <div class="form-group">
                <label for="playerId">Player ID:</label>
                <input type="text" class="form-control" id="playerId" name="playerId" required>
            </div>            

            <div class="form-group">
                <label for="teamId">Team ID:</label>
                <input type="text" class="form-control" id="teamId" name="teamId" required>
            </div>            

            <button type="submit" class="btn btn-default">Submit</button>

        </div>

        </div>

        </div>

    </form> 


@endsection
