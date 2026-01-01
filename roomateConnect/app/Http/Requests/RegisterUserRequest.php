<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
             'name' => 'required|min:5',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|confirmed|min:8',
        ];
    }
    public function messages()
    {
        return parent::messages([
           
        'name.required' => 'Please enter your full name!',
        'name.min' => 'Name must be at least 5 characters long.',
        'email.required' => 'We need your email address.',
        'email.email' => 'Please enter a valid email.',
        'email.unique' => 'This email has already been registered.',
        'password.required' => 'You must set a password.',
        'password.confirmed' => 'Password confirmation does not match.',
        'password.min' => 'Password must be at least 8 characters.',
    
        ]);
    }
}
