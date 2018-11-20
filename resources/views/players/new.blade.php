@extends ('layout.header')

@section ('content')

    <h1 class="content-header grey-back">Register Player</h1>

<form>

  <div class="object-div grey-back">

        <div class="form-group">
            <label for="playerFirst">First Name:</label>
            <input type="text" class="form-control" id="playerFirst">
        </div>

        <div class="form-group">
            <label for="playerLast">Last Name:</label>
            <input type="text" class="form-control" id="playerLast">
        </div>

        <div class="form-group">
            <label for="playerPosition">Position:</label>
            <input type="text" class="form-control" id="playerPosition">
        </div>

        <div class="form-group">
            <label for="playerSchool">School:</label>
            <input type="text" class="form-control" id="playerSchool">
        </div>

        <button type="submit" class="btn btn-default">Submit</button>

    </div>

</form> 


@endsection
