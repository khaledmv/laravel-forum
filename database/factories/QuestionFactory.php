<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class QuestionFactory extends Factory
{


    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => rtrim($this->faker->sentence(rand(5,10)), "."),
            'slug' => $this->faker->sentence(),
            'body' => $this->faker->paragraphs(rand(3,7), true),
            'view'=> rand(0,10),
            'answers' => rand(0,10),
            'votes' => rand(-3, 10),
            'best_answer_id' => rand(1,3),
            'user_id' => rand(1,3)
        ];
    }
}
