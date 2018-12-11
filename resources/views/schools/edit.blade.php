@extends ('layout.header')

@section ('content')

    <form method="POST" action="/schools/{{$school->schoolId}}">

        {{ csrf_field() }}

        <div class="parent-div"> 
        
        <div class="login-form">

        <h1 class="title2 grey-back">Edit {{$school->schoolName}}</h1>
        
        <div class="grey-back buffer">

            <div class="form-group">
                <label for="schoolName">School Name:</label>
                <input type="text" class="form-control" id="schoolName" name="schoolName" value="{{$school->schoolName}}" required>
            </div>

            <div class="form-group">
                <label for="organizationId">Organization Id:</label>
                <input type="text" class="form-control" id="organizationId" name="organizationId" value="{{$school->organizationId}}" required>
            </div>

            <div class="form-group">
                <label for="schoolRanking">School Ranking:</label>
                <input type="text" class="form-control" id="schoolRanking" name="schoolRanking" value="{{$school->schoolRanking}}" required>
            </div>
            
            <div class="form-group">
                <label for="schoolPopulation">School Population:</label>
                <input type="text" class="form-control" id="schoolPopulation" name="schoolPopulation" value="{{$school->schoolPopulation}}" required>
            </div>


            <button type="submit" class="btn btn-default">Submit</button>

        </div>

        </div>

        </div>

    </form> 


@endsection
