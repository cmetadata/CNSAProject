@extends ('layout.header')

@section ('content')

    <form method="POST" action="/stadiums">

        {{ csrf_field() }}

        <div class="parent-div"> 
        
        <div class="login-form">

        <h1 class="title2 grey-back">Register Stadium</h1>
        
        <div class="grey-back buffer">

            <div class="form-group">
                <label for="stadiumName">Stadium Name:</label>
                <input type="text" class="form-control" id="stadiumName" name="stadiumName" required>
            </div>

            <div class="form-group">
                <label for="stadiumCapacity">Stadium Capacity:</label>
                <input type="text" class="form-control" id="stadiumCapacity" name="stadiumCapacity" required>
            </div>            

            <button type="submit" class="btn btn-default">Submit</button>

        </div>

        </div>

        </div>

    </form> 


@endsection
