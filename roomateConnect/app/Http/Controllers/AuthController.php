<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterUserRequest;
use App\Models\Role;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(){
        $roles=Role::all();
        return view('auth.register',compact('roles'));
    }
    public function login(){
        return view('auth.login');
    }

    public function loginProcess(Request $request){
        $validation=$request->validate([
             'email' => 'required|email',
             'password' => 'required',
        ],
        [
            'email.email' => 'Please enter a valid  email.',
            'email.required' => 'Please enter your registered  email.',
            'password.required'=>'pls enter your password',
        ]);
      if (Auth::attempt($validation)) {
    $user = Auth::user();

    if ($user->role_id == 1) {
        return redirect()->route('agentDashboard');
    } elseif ($user->role_id == 2) {
        return redirect()->route('discover');
    }
}

return back()->withErrors([
    'email' => 'Invalid credentials',
]);
    }


    public function registerProcess(Request $request){
       $validation=$request->validate([
         'name' => 'required|min:5',
        'email' => 'required|email|unique:users,email',
        'role_id'=>'required',
        'password' => 'required|confirmed|min:8',
       ],[
         'name.required' => 'Please enter your full name!',
        'name.min' => 'Name must be at least 5 characters long.',
        'email.required' => 'We need your email address.',
        'email.email' => 'Please enter a valid email.',
        'email.unique' => 'This email has already been registered.',
        'role_id.required'=>'Please select how you intend to use Roommate Connect',
        'password.required' => 'You must set a password.',
        'password.confirmed' => 'Password confirmation does not match.',
        'password.min' => 'Password must be at least 8 characters.',
    
       ]);
    
       
    $create = User::create($validation);

if ($create->role_id == 1) {
    Auth::login($create); 
    return redirect()->route('agent.onboarding');
} elseif ($create->role_id == 2) {
    Auth::login($create); 
    return redirect()->route('student.onboarding');
}
    
    }
}
