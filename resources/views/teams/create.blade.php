@extends ('layout.header')

@section ('content')

    <h1 class="content-header grey-back">Register Team</h1>

    <form method="POST" action="/teams">

        {{ csrf_field() }}
        
        <div class="object-div grey-back">

            <div class="form-group">
                <label for="firstName">Team Name:</label>
                <input type="text" class="form-control" id="firstName" name="firstName">
            </div>

            <div class="form-group">
                <label for="lastName">Last Name:</label>
                <input type="text" class="form-control" id="lastName" name="lastName">
            </div>

            <div class="form-group">
                <label for="yearEntered">Year Entered:</label>
                <input type="text" class="form-control" id="yearEntered" name="yearEntered">
            </div>            

            <div class="form-group">
                <label for="playerRating">Player Rating:</label>
                <input type="text" class="form-control" id="playerRating" name="playerRating">
            </div>            

            <div class="form-group">
                <label for="playerPosition">Position:</label>
                <input type="text" class="form-control" id="playerPosition" name="playerPosition">
            </div>

            <div class="form-group">
                <label for="schoolId">School:</label>
                <input type="text" class="form-control" id="schoolId" name="schoolId">
            </div>

            <button type="submit" class="btn btn-default">Submit</button>

        </div>

    </form> 


@endsection
