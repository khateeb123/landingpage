<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Models\Pro;
use App\Models\Location;
use App\Models\ProUserDetail;
use App\Models\Role;


use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
    protected $redirectTo = RouteServiceProvider::HOME;

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
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:4', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    protected function createPro(){

        $pros       = Pro::all();
        $locations   = Location::all();

        return view('auth.pro_register',['pros'=>$pros, 'locations'=>$locations]);
    }
    protected function storePro(Request $request)
    { 
        $request->validate([
            "name"          =>['required', 'string', 'max:255'],
            "email"         =>['required', 'string', 'email', 'max:255', 'unique:users'],
            "speciality"    =>['required',  'max:255'],
            "location"      =>['required',  'max:255'],
            "cost"          =>['required',  'max:255'],
            "experience"    =>['required',  'max:255'],
            "password"      =>['required',  'min:8']

        ]);
       

        $proRole= Role::where('name','pro')->first();
        $user = User::create([
                'role_id'=> $proRole->id,
                'pro_id'=>$request->speciality,
                'location_id'=>$request->location,
                'name'=>$request->name,
                'email'=>$request->email,
                'password'=>Hash::make($request->password),
                
                        ]);
        ProUserDetail::create([

         'user_id'      =>$user->id,
          'experience'  => $request->experience,
          'cost'        => $request->cost,


        ]);





        return redirect()->route('welcome');
    }
}
