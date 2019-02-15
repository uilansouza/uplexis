<?php

namespace estoque\Http\Controllers\Auth;

use estoque\User;
use Validator;
use Auth;
use estoque\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use RegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */
    protected $username = 'name';
    protected $redirectTo ='/';
    
    
    

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */

     
    public function __construct()
    {
        
        $this->middleware('guest', ['except' => 'getLogout']);
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
            'name' => 'required|string|max:20|unique:users',
            'password' => 'required|string|min:4|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    
    protected function create(array $data)
    
    {
        
        return User::create([
             'name' => $data['name'],
             'password' => bcrypt($data['password']),
             
        ]);
    }

   protected function credentials(Request $request)
    {
       
        return [
            $field => $request->get($this->username()),
            'password' => $request->password,
           
        ];
      
    }

    public function authenticate()
    {
        if (Auth::attempt(['name' => $name, 'password' => $password])) {
            // Authentication passed...
            return redirect()->intended('/home');
        }
    }

    
    
}

