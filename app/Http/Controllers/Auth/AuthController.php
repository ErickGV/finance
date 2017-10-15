<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Models\Customer;
use App\Models\Role;
use App\Models\Roledetail;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

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

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = 'mi-cuenta/operaciones';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
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
            'name' => 'required|max:50',
            'fatherLastname' => 'max:50',
            'motherLastname' => 'max:50',
            'telephone' => 'digits_between:7,12',
            'mobilephone' => 'digits_between:9,12',
            'doc_code' => 'digits_between:7,15|unique',
            'birthday' => 'max:10',
            'email' => 'required|email|max:30|unique:users',
            'password' => 'required|min:6|confirmed',
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

        $customer                   = new Customer;
        $customer->name             = $data['name'];
        $customer->fatherLastname   = $data['fatherLastname'];
        $customer->motherLastname   = $data['motherLastname'];
        $customer->telephone        = $data['telephone'];
        $customer->mobilephone      = $data['mobilephone'];            
        $customer->birthday         = $data['birthday'];
        $customer->gender_id        = $data['gender'];                        
        $customer->docCode          = $data['doc_code'];                        
        $customer->docType_id       = $data['doc_type'];       
        $customer->customerType     = 1;//$data['customer_type'];                
        $customer->save();

        $user              = new User;
        $user->name        = $data['name'];
        $user->email       = $data['email'];
        $user->password    = bcrypt($data['password']);
        $user->customer_id = $customer->id;
        $user->save();
        
        $roles = Role::get();
        foreach($roles as $role){
            $roledetail         = new Roledetail;
            if ( $role->id == 3)
                $roledetail->active = 1;                    
            else
                $roledetail->active = 0;        
            $roledetail->role_id = $role->id;
            $roledetail->user_id = $user->id;            
            $roledetail->save();
        }            

        return $user;

        /*
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
        */
    }
}
