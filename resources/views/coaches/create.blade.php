@extends ('layout.header')

@section ('content')

    <form method="POST" action="/coaches">

        {{ csrf_field() }}

        <div class="parent-div"> 
        
        <div class="login-form">

        <h1 class="title2 grey-back">Register Coach</h1>
        
        <div class="grey-back buffer">

            <!-- push person info & save to persons table, 
                 pull personId from last() method from persons table, 
                 push coachId, teamId, personId to coaches table -->

            <div class="form-group">
                <label for="personFirstName">First Name:</label>
                <input type="text" class="form-control" id="personFirstName" name="personFirstName" required>
            </div>

            <div class="form-group">
                <label for="personLastName">Last Name:</label>
                <input type="text" class="form-control" id="personLastName" name="personLastName" required>
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
