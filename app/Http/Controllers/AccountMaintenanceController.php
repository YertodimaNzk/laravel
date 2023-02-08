<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;
use App\Models\Role;

class AccountMaintenanceController extends Controller
{
  public function index() {
    $accounts = Account::all();
    $roles = Role::all();
    return view('pages.account.maintenance', [
      'title' => 'Account Maintenance',
      'accounts' => $accounts,
      'roles' => $roles
    ]);
  }
}
