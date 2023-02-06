<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Gender;

class GenderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      if(Gender::count('desc') == 0) {
        Gender::create([
            "desc" => "male",
          ]);
        Gender::create([
            "desc" => "female",
          ]);
      }
    }
}
