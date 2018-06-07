<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Invitation;

class RegisterController extends Controller
{
    use RegistersUsers;

    protected $redirectTo = '/home';

    public function __construct()
    {
        $this->middleware('guest');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
            'invite_code' => [
                'required',
                'string',
                'size:16',
                function($attribute,$value,$fail){
                    $invitation = Invitation::where('code',$value)->first();
                    if($invitation){
                        if($invitation->use() == 'ok'){
                            return true;
                        } else {
                            return $fail('Invication code is expired');
                        }
                    } else {
                        return $fail('Invication code is invalid');
                    }
                }
            ]
        ]);
    }
    protected function create(array $data)
    {
            return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'invite_code' => $data['invite_code'],
            ]);
       
    }
}
