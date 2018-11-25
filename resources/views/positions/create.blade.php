@extends ('layout.header')

@section ('content')

    <form method="POST" action="/positions">

        {{ csrf_field() }}

        <div class="parent-div"> 
        
        <div class="login-form">

        <h1 class="title2 grey-back">Register Position</h1>
        
        <div class="grey-back buffer">

            <div class="form-group">
                <label for="teamId">Team ID:</label>
                <input type="text" class="form-control" id="teamId" name="teamId" required>
            </div>            

            <div class="form-group">
                <label for="personId">Person ID:</label>
                <input type="text" class="form-control" id="personId" name="personId" required>
            </div>                


            <div class="form-group">
                <label for="positionDescription">Position Name:</label>
                <input type="text" class="form-control" id="positionDescription" name="positionDescription" required>
            </div>

            <div class="form-group">
                <label for="positionStartDate">Start Date:</label>
                <input type="date" class="form-control" id="positionStartDate" name="positionStartDate" required>
            </div>            

            <div class="form-group">
                <label for="positionEndDate">End Date:</label>
                <input type="date" class="form-control" id="positionEndDate" name="positionEndDate" required>
            </div>            

            <button type="submit" class="btn btn-default">Submit</button>

        </div>

        </div>

        </div>

    </form> 


@endsection
