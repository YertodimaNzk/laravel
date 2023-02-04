<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auths.register', [
            'title' => 'Register',
            'active' => 'register'
        ]);
    }
}
