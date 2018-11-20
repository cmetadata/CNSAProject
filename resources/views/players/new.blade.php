@extends ('layout.header')

@section ('content')

    <h1 class="content-header grey-back">Register Player</h1>

<form>

  <div class="object-div grey-back">

        <div class="form-group">
            <label for="email">Email address:</label>
            <input type="email" class="form-control" id="email">
        </div>

        <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" id="pwd">
        </div>

        <button type="submit" class="btn btn-default">Submit</button>

    </div>

</form> 


@endsection
