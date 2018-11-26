@extends ('layout.header')

@section ('content')

    <form method="POST" action="/incidents">

        {{ csrf_field() }}

        <div class="parent-div"> 
        
        <div class="login-form">

        <h1 class="title2 grey-back">Register Incident</h1>
        
        <div class="grey-back buffer">

            <div class="form-group">
                <label for="incidentDescription">Incident Name:</label>
                <input type="text" class="form-control" id="incidentDescription" name="incidentDescription" required>
            </div>

            <button type="submit" class="btn btn-default">Submit</button>

        </div>

        </div>

        </div>

    </form> 


@endsection
