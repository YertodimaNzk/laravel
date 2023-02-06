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
            "first_name" => $this->faker->name(),
            "last_name" => $this->faker->name(),
            "email" => $this->faker->safeEmail()->unique(),
            "display_image_link" => "",
            "password" => bcrypt('IN123')
        ];
    }
}
