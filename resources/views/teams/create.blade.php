@extends ('layout.header')

@section ('content')

    <h1 class="content-header grey-back">Register Team</h1>

    <form method="POST" action="/teams">

        {{ csrf_field() }}
        
        <div class="object-div grey-back">

            <div class="form-group">
                <label for="teamId">Team ID:</label>
                <input type="text" class="form-control" id="teamId" name="teamId" required>
            </div>

            <div class="form-group">
                <label for="teamName">Team Name:</label>
                <input type="text" class="form-control" id="teamName" name="teamName" required>
            </div>

            <div class="form-group">
                <label for="schoolId">School:</label>
                <input type="text" class="form-control" id="schoolId" name="schoolId" required>
            </div>            

            <button type="submit" class="btn btn-default">Submit</button>

        </div>

    </form> 


@endsection
