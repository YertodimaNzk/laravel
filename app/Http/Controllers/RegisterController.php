<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auths.register', [
            'title' => 'Register',
            'active' => 'register'
        ]);
    }
    
    public function validator(Request $request)
    {
        $validatedData = $request->validate([
            'first-name' => ['required', 'string', 'max:25'],
            'last-name' => ['required', 'string', 'max:25'],
            'gender' => ['required','in:male,female'],
            'role' => ['required', 'in:user,admin'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', Password::min(8)->letters()->numbers(), 'confirmed'],
            'c-pass' => ['required', 'same:password', 'confirmed'],
            'picture' => ['mimes:jpeg,png,jpg', 'size:4096']
        ]);
    
      $validatedData['password'] = Hash::make($validatedData['password']);

      User::create($validatedData);
    
      return redirect('/login')->with('success', 'Registration successfull! Please login');
    }
}
