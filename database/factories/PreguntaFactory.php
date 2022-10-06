<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PreguntaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'pregunta'=>$this->faker->text(),
            'imagen' => $this->faker->image('public/src/pregunta',640,480, null, false),
        ];
    }
}
