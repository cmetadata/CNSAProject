@extends ('layout.header')

@section ('content')

    <form method="POST" action="/schools">

        {{ csrf_field() }}

        <div class="parent-div"> 
        
        <div class="login-form">

        <h1 class="title2 grey-back">Register School</h1>
        
        <div class="grey-back buffer">

            <div class="form-group">
                <label for="schoolName">School Name:</label>
                <input type="text" class="form-control" id="schoolName" name="schoolName" required>
            </div>

            <div class="form-group">
                <label for="schoolRanking">School Ranking:</label>
                <input type="text" class="form-control" id="schoolRanking" name="schoolRanking" required>
            </div>
            
            <div class="form-group">
                <label for="schoolPopulation">School Population:</label>
                <input type="text" class="form-control" id="schoolPopulation" name="schoolPopulation" required>
            </div>


            <button type="submit" class="btn btn-default">Submit</button>

        </div>

        </div>

        </div>

    </form> 


@endsection
