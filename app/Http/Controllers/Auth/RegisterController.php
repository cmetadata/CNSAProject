<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        if ($data == 'Admin') {
            $this->middleware('admin');
        } 
        else if ($data == 'Coach') {
            $this->middleware('coach');
        }
        else {
            $this->middleware('guest');
        }
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'loginId'     => ['required', 'integer'],
            'password'    => ['required', 'string', 'max:255', 'confirmed'],
            'userType'    => ['required', 'string', 'max:1'],
            'email'       => ['required', 'string', 'max:100'],
            'phoneNumber' => ['required', 'string', 'max:14'],
            'firstName'   => ['required', 'string', 'max:35'],
            'lastName'    => ['required', 'string', 'max:35'],

        ]);
    }

    /**
     * Create a new login instance
     *
     * @param  array  $data
     * @return \App\User
     */
    public function create()
    {
        return view('auth.register');
    }



    public function store()
    {
        
        $this->validate(request(), [

            'loginId'     => ['required', 'integer'],
            'password'    => ['required', 'string', 'max:255', 'confirmed'],
            'userType'    => ['required', 'string', 'max:1'],
            'email'       => ['required', 'string', 'max:100'],
            'phoneNumber' => ['required', 'string', 'max:14'],
            'firstName'   => ['required', 'string', 'max:35'],
            'lastName'    => ['required', 'string', 'max:35'],
        ]);
        
        //Create the user
        $login = Login::create([
            'loginId'     => $data['loginId'],
            'password'    => $data['password'],
            'userType'    => $data['userType'],
            'email'       => $data['email'],
            'phoneNumber' => $data['phoneNumber'],
            'firstName'   => $data['firstName'],
            'lastName'    => $data['lastName'],
            'password'    => Hash::make($data['password']),
        ]);
        //Sign in the newly create login
        auth()->login($login);

        //Redirect to the home page
        return $redirectTo;
    }
}
