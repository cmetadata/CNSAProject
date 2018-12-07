@extends('layout.header')

@section('content')

<div class="parent-div">
    <div class="login-form">
        <h1 class="title2 grey-back">Register</h1>
        <br/>
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Getting the required coach ID to be entered -->
            <div class="form-group row">
                <label for="name" class="col-md-4 col-form-label text-md-right">Manager ID:</label>

                <div class="col-md-6">
                    <input id="name" class="form-control" type="text" name="name">
                </div>
            </div>

            <!-- Getting the first name of the coach -->
            <div class="form-group">
                <label for="name">First Name:</label>

                <div class="col-md-6">
                    <input type="text" class="form-control" id="name" name="name">
                </div>

            </div>

            <!-- Getting the coaches last name -->
            <div class="form-group">
                <label for="name">Last Name:</label>

                <div class="col-md-6">
                    <input type="text" class="form-control" id="name" name="name">
                </div>
            </div>

            <!-- Getting the coaches team ID -->
            <div class="form-group row">
                <label for="email">Team ID:</label>

                <div class="col-md-6">
                    <input type="text" class="form-control" id="name" name="name">
                </div>
            </div>

            <!-- Position -->
            <div class="form-group row">
                <label for="name">Position:</label>

                <div class="col-md-6">
                    <input type="text" class="form-control" id="name" name="name">
                </div>
            </div>

            <!-- The coaches password -->
            <div class="form-group row">
                <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                <div class="col-md-6">
                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                    @if ($errors->has('password'))
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <!-- Confirm password -->
            <div class="form-group row">
                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                <div class="col-md-6">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                </div>
            </div>

            <!-- Submit button -->
            <div class="form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-default">
                        {{ __('Register') }}
                    </button>
                </div>
            </div>

        </form>
    </div>
</div>
           
@endsection
