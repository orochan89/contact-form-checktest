<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'first_name' => $this->faker->name,
            'last_name' => $this->faker->name,
            'gender' => $this->faker->gender,
            'email' => $this->faker->email,
            'tell' => $this->faker->tell,
            'address' => $this->faker->address,
            'building' => $this->faker->building,
            'category' => $this->faker->category_id,
            'content' => $this->faker->sentence
        ];
    }
}
