<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ReportFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
           'name'=>$this->faker->company,
           'data'=>$this->faker->text(150),
           'is_active'=>$this->faker->boolean,
        ];
    }
}
