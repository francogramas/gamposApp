<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RespuestaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'pregunta_id' =>$this->faker->randomDigit()+1,
            'respuesta'=> $this->faker->text(),
            'imagen' => $this->faker->imageUrl(),
            'puntaje' => $this->faker->numberBetween(1,5),
        ];
    }
}
