@extends ('layout.header')

@section ('content')

    <form method="POST" action="/teams">

        {{ csrf_field() }}

        <div class="parent-div"> 
        
        <div class="login-form">

        <h1 class="title2 grey-back">Edit {{$team->teamName}}</h1>
        
        <div class="grey-back buffer">

            <div class="form-group">
                <label for="teamName">Team Name:</label>
                <input type="text" class="form-control" id="teamName" name="teamName" value="{{$team->teamName}}" required>
            </div>

            <div class="form-group">
                <label for="schoolId">School ID:</label>
                <input type="text" class="form-control" id="schoolId" name="schoolId" value="{{$team->schoolId}}" required>
            </div>            

            <button type="submit" class="btn btn-default">Submit</button>

        </div>

        </div>

        </div>

    </form> 


@endsection
