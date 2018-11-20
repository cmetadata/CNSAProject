@extends ('layout.header')

@section('content')

        <div class="card-header">{{ __('Register Player') }}</div>

                    <form method="POST" >
                    @csrf

                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                        <input id="name" type="text" class="form-control" name="name" required autofocus>
                    


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>                    
                    </form>        
        </div>
@endsection
