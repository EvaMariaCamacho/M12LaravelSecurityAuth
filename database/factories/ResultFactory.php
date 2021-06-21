<?php

namespace Database\Factories;

use App\Models\Result;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Team;


class ResultFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Result::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'local_gol' => $this->faker->sentence,
            'visitor_gol' => $this->faker->sentence,
            'date' => $this->faker->date,
            'teams_id' => Team::factory(),


        ];
    }
}