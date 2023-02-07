<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountMaintenanceController extends Controller
{
  public function index() {
    return view('pages.account.maintenance', [
      'title' => 'Account Maintenance',
    ]);
  }
}
