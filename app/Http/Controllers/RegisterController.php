<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules\Password;
use App\Models\Account;
use App\Models\Role;
use App\Models\Gender;

class RegisterController extends Controller
{
    public function index()
    {
        $roles = Role::all();
        $genders = Gender::all();
        
        return view('auth.register', [
            'title' => 'Register',
            'roles' => $roles,
            'genders' => $genders,
        ]);
    }
    
    public function validator(Request $request)
    {
      $validatedData = $request->validate([
        'role_id' => ['required'],
        'gender_id' => ['required'],
        'first_name' => ['required', 'string', 'max:25'],
        'last_name' => ['required', 'string', 'max:25'],
        'email' => ['required', 'string', 'email', 'max:255', 'unique:accounts'],
        'password' => ['required', 'string', Password::min(8)->letters()->numbers()],
       /* 'password_confirmation' => ['required', 'same:password', 'confirmed'], */
        'display_image_link' => ['mimes:jpeg,png,jpg', 'max:4096']
      ]);
        
      /*$img_path = $request->file('image')->validator('image', 'public/img');*/
      $validatedData['role_id'] = number_format($validatedData['role_id']);
      $validatedData['gender_id'] = number_format($validatedData['gender_id']);

      $validatedData['display_image_link'] = '';
    
      $validatedData['password'] = Hash::make($validatedData['password']);
      
      Account::create([$validatedData]);
      return redirect('/login')->with('success', 'Registration successfull! Please login');
    }
}
