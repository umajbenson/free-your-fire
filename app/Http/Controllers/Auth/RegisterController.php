<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Models\Role;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Traits\CaptchaTrait;

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

    use RegistersUsers, CaptchaTrait;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        $data['captcha'] = $this->captchaCheck($data);

        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'g-recaptcha-response'  => 'required',
            'captcha'               => 'required|min:1'
        ],
        [
            'email.email' => 'That does not look like an email address.',
            'g-recaptcha-response.required' => 'You must prove that you are not a robot.',
            'captcha.min' => 'You must prove that you are not a robot.'
        ]
    );
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $role = Role::where('name', 'Member')->first();
        //dd($role);
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'role_id' => $role->id,
            'is_admin' => false,
            'is_active' => true,
            'remember_token' => str_random(20),
            
            'password' => Hash::make($data['password']),
        ]);
    }
}
