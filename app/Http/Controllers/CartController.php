<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
class CartController extends Controller
{
    public function index()
    {
      $orders = Order::all();
        return view('pages.cart', [
          'title' => 'Cart',
          'orders' => $orders
        ]);
    }
}
