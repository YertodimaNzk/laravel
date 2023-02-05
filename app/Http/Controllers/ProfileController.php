<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    return view('pages.profile', [
      'title' => 'Profile',
      'active' => 'profile'
    ]);
}
