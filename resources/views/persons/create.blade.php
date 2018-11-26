@extends ('layout.header')

@section ('content')

    <form method="POST" action="/persons">

        {{ csrf_field() }}

        <div class="parent-div"> 
        
        <div class="login-form">

        <h1 class="title2 grey-back">Register Person</h1>
        
        <div class="grey-back buffer">

            <div class="form-group">
                <label for="personFirstName">First Name:</label>
                <input type="text" class="form-control" id="personFirstName" name="personFirstName" required>
            </div>

            <div class="form-group">
                <label for="personLastName">Last Name:</label>
                <input type="text" class="form-control" id="personLastName" name="personLastName" required>
            </div>            

            <button type="submit" class="btn btn-default">Submit</button>

        </div>

        </div>

        </div>

    </form> 


@endsection
