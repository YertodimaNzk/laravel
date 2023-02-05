<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountMaintenanceController extends Controller
{
    return view('pages.cart', [
      'title' => 'Cart',
      'active' => 'cart'
    ]);
}
