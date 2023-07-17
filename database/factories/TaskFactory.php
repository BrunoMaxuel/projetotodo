<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Nette\Utils\Random;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $user = User::all()->random();
        return [
            'title' => $this->faker->text(30),
            'description' => $this->faker->text(30),
            'duo_date' => $this->faker->dateTime(),
            'user_id' => $user,
            'category_id' => $user
        ];
    }
}
