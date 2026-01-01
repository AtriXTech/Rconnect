<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;

class Register extends Component
{
    public $name = '';
    public $email = '';
    public $password = '';
    public $password_confirmation = '';

    protected $rules = [
        'name' => 'required|min:5',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:8|confirmed',
    ];

    protected $messages = [
        'name.required' => 'Your name is required',
        'name.min' => 'Your name must be at least 5 characters',
        'email.required' => 'Email is required',
        'email.email' => 'Enter a valid email',
        'email.unique' => 'Email already exists',
        'password.required' => 'Password is required',
        'password.min' => 'Password must be at least 8 characters',
        'password.confirmed' => 'Passwords do not match',
    ];

    public function create()
    {
        $this->validate();

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => Hash::make($this->password),
        ]);

        $this->reset();

        session()->flash('success', 'Account created successfully');
    }

    public function render()
    {
        return view('livewire.register');
    }
}
