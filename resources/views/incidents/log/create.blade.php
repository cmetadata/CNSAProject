@extends ('layout.header')

@section ('content')

    <form method="POST" action="/incidents_log">

        {{ csrf_field() }}

        <div class="parent-div"> 
        
        <div class="login-form">

        <h1 class="title2 grey-back">Register Player Incident</h1>
        
        <div class="grey-back buffer">

            <div class="form-group">
                <label for="playerId">Player Id:</label>
                <input type="text" class="form-control" id="playerId" name="playerId" required>
            </div>
            
            <div class="form-group">
                <label for="incidentId">Incident Id:</label>
                <input type="text" class="form-control" id="incidentId" name="incidentId" required>
            </div>     

            <div class="form-group">
                <label for="incidentDate">Incident Date:</label>
                <input type="date" class="form-control" id="incidentDate" name="incidentDate" required>
            </div>                             

            <button type="submit" class="btn btn-default">Submit</button>

        </div>

        </div>

        </div>

    </form> 


@endsection
