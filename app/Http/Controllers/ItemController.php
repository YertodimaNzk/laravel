<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{
    public function index ($id) {
      $item = Item::find($id);
      return view('pages.item', [
        'title' => $item->name,
        'item' => $item,
      ]);
    }
}
