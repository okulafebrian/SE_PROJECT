<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    
    use RegistersUsers;

    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct()
    {
        $this->middleware('guest');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed']
        ]);
    }

    protected function create(array $data)
    {   
        // preference_1: simple | preference_2: budget | preference_3: healthy

        return User::create([
            'name' => $data['name'],
            'preference_1' => empty($data['preference_1']) ? '0' : $data['preference_1'],
            'preference_2' => empty($data['preference_2']) ? '0' : $data['preference_2'],
            'preference_3' => empty($data['preference_3']) ? '0' : $data['preference_3'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);

    }
}
