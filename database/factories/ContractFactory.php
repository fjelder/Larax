<?php

namespace Database\Factories;

use App\Models\Contract;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContractFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Contract::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->city .' - '. $this->faker->city,
            'task_name' => $this->faker->realText(250),
            'number' => $this->faker->regexify('[0-9]{2}/[0-9]{3}/[0-9]{4}/[0-9]{2}/Z/I'),
            'start_date' => $this->faker->dateTimeBetween($startDate = '-3 years', $endDate = 'now'),
            'stop_date' => $this->faker->dateTimeBetween($startDate = 'now', $endDate = '+2 years'),
            'stage_id' => $this->faker->numberBetween($min = 1, $max = 3),
            'study_id' => $this->faker->numberBetween($min = 1, $max = 3),
        ];
    }
}
