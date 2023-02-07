<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      if(Role::count('id') == 0) {
        Role::create([
          'name' => 'user',
        ]);
        Role::create([
          'name' => 'admin',
        ]);
      }
    }
}
