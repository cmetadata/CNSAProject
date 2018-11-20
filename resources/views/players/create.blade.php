@extends ('layout.header')

@section ('content')

    <h1 class="content-header grey-back">Register Player</h1>

    <form method="POST" action="/players">

        {{ csrf_field() }}
        
        <div class="object-div grey-back">

            <div class="form-group">
                <label for="firstName">First Name:</label>
                <input type="text" class="form-control" id="firstName">
            </div>

            <div class="form-group">
                <label for="lastName">Last Name:</label>
                <input type="text" class="form-control" id="lastName">
            </div>

            <div class="form-group">
                <label for="yearEntered">Year Entered:</label>
                <input type="text" class="form-control" id="yearEntered">
            </div>            

            <div class="form-group">
                <label for="playerRating">Player Rating:</label>
                <input type="text" class="form-control" id="playerRating">
            </div>            

            <div class="form-group">
                <label for="playerPosition">Position:</label>
                <input type="text" class="form-control" id="playerPosition">
            </div>

            <div class="form-group">
                <label for="schoolId">School:</label>
                <input type="text" class="form-control" id="schoolId">
            </div>

            <button type="submit" class="btn btn-default">Submit</button>

        </div>

    </form> 


@endsection
