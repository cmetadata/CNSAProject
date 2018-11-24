@extends ('layout.header')

@section ('content')

        <div class="parent-div"> 
        
        <div class="login-form">
        
        <h1 class="title2 grey-back">Register Player</h1>
        <br/>
        <div class="grey-back buffer">

            <form method="POST" action="/players">
                {{ csrf_field() }}

            <div class="form-group">
                <label for="personId">Person ID:</label>
                <input type="text" class="form-control" id="personId" name="personId" required>
            </div>

            <div class="form-group">
                <label for="yearEntered">Year Entered:</label>
                <input type="text" class="form-control" id="yearEntered" name="yearEntered" required>
            </div>            

            <div class="form-group">
                <label for="playerRating">Player Rating:</label>
                <input type="text" class="form-control" id="playerRating" name="playerRating" required>
            </div>            

            <div class="form-group">
                <label for="position">Position:</label>
                <input type="text" class="form-control" id="position" name="position" required>
            </div>

            <div class="form-group">
                <label for="teamId">Team ID:</label>
                <input type="text" class="form-control" id="teamId" name="teamId" required>
            </div>
            

            <button type="submit" class="btn btn-default">Submit</button>

        </form>
        </div>

    </div>
    </div>


@endsection
