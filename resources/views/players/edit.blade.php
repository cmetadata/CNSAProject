@extends ('layout.header')

@section ('content')

        <form method="POST" action="/players/{{$player->playerId}}">
        {{ csrf_field() }}
        <div class="parent-div"> 
        <div class="login-form">

        <h1 class="title2 grey-back">Edit {{$person->personName}}</h1>
        
        <div class="grey-back buffer">

            <div class="form-group">
                <label for="firstName">First Name:</label>
                <input type="text" class="form-control" id="firstName" name="firstName" value="{{$person->firstName}}" required>
            </div>

            <div class="form-group">
                <label for="lastName">Last Name:</label>
                <input type="text" class="form-control" id="lastName" name="lastName" value="{{$person->lastName}}" required>
            </div>   
            
            <div class="form-group">
                <label for="highSchool">High School:</label>
                <input type="text" class="form-control" id="highSchool" name="highSchool" value="{{$player->schoolId}}" required>
            </div>            

            <div class="form-group">
                <label for="yearEntered">Year Entered:</label>
                <input type="text" class="form-control" id="yearEntered" name="yearEntered" value="{{$player->yearEntered}}" required>
            </div>            

            <div class="form-group">
                <label for="playerRating">Player Rating:</label>
                <input type="text" class="form-control" id="playerRating" name="playerRating" value="{{$player->playerRating}}" required>
            </div>            

            <div class="form-group">
                <label for="position">Position:</label>
                <input type="text" class="form-control" id="position" name="position" value="{{$player->position}}" required>
            </div>

            <div class="form-group">
                <label for="teamId">Team ID:</label>
                <input type="text" class="form-control" id="teamId" name="teamId" value="{{$player->teamId}}" required>
            </div>
            

            <button type="submit" class="btn btn-default">Submit</button>

        
        </div>
        </div>
        </div>
    </form>


@endsection
