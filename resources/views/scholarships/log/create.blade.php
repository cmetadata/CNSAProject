@extends ('layout.header')

@section ('content')

    <form method="POST" action="/scholarships_log">

        {{ csrf_field() }}

        <div class="parent-div"> 
        
        <div class="login-form">

        <h1 class="title2 grey-back">Register Player Scholarship</h1>
        
        <div class="grey-back buffer">

            <div class="form-group">
                <label for="scholarshipDate">Scholarship Date:</label>
                <input type="date" class="form-control" id="scholarshipDate" name="scholarshipDate" required>
            </div>

            <div class="form-group">
                <label for="scholarshipId">Scholarship Id:</label>
                <input type="text" class="form-control" id="scholarshipId" name="scholarshipId" required>
            </div>                        

            <div class="form-group">
                <label for="playerId">Player Id:</label>
                <input type="text" class="form-control" id="playerId" name="playerId" required>
            </div>                        

            <button type="submit" class="btn btn-default">Submit</button>

        </div>

        </div>

        </div>

    </form> 


@endsection
