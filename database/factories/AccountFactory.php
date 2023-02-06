<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Account;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class AccountFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "role_id" => mt_rand(1,2),
            "gender_id" => mt_rand(1,2),
            "first_name" => $this->faker->firstName(),
            "last_name" => $this->faker->lastName(),
            "email" => $this->faker->unique()->safeEmail(),
            "display_image_link" => "",
<<<<<<< HEAD
            "password" => bcrypt('Kentod123'),
=======
            "password" => bcrypt('IN123')
>>>>>>> refs/remotes/origin/main
        ];
    }
}
