<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    return view('pages.cart', [
      'title' => 'Cart',
      'active' => 'cart'
    ]);
}
