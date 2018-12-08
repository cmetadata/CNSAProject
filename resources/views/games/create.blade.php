@extends ('layout.header')

@section ('content')

        <div class="parent-div"> 
        
        <div class="login-form">
        
        <h1 class="title2 grey-back">Register Game</h1>
        <br/>
        <div class="grey-back buffer">

        <form method="POST" action="/games">
            {{ csrf_field() }}
            
            <!-- push game info & save to games table, 
                 pull gameId from last() method from games table, 
                 push gameId, teamId1, teamId2, teamScore1,  to coaches table -->

            <div class="form-group">
                <label for="gameDate">Game Date:</label>
                <input type="date" class="form-control" id="gameDate" name="gameDate" required>
            </div>

            <div class="form-group">
                <label for="gameAttendance">Game Attendance:</label>
                <input type="text" class="form-control" id="gameAttendance" name="gameAttendance" required>
            </div>            

            <div class="form-group">
                <label for="stadiumId">Stadium ID:</label>
                <input type="text" class="form-control" id="stadiumId" name="stadiumId" required>
            </div>   

            <div class="form-group">
                <label for="teamId1">Team ID 1:</label>
                <input type="text" class="form-control" id="teamId1" name="teamId1" required>
            </div>            


            <div class="form-group">
                <label for="teamScore1">Team 1 Score:</label>
                <input type="text" class="form-control" id="teamScore1" name="teamScore1" required>
            </div>            

            <div class="form-group">
                <label for="teamId2">Team ID 2:</label>
                <input type="text" class="form-control" id="teamId2" name="teamId2" required>
            </div>

            <div class="form-group">
                <label for="teamScore2">Team 2 Score:</label>
                <input type="text" class="form-control" id="teamScore2" name="teamScore2" required>
            </div>            

            <button type="submit" class="btn btn-default">Submit</button>

        </form>
        
        </div>

    </div>
    </div>


@endsection
