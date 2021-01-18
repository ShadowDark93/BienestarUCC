<?php

namespace Database\Factories;

use App\Models\Reto;
use Illuminate\Database\Eloquent\Factories\Factory;

class RetoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Reto::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->name(),
            'slug'=> $this->faker->slug,
            'descripcion' => $this->faker->sentence(),
            'link' => $this->faker->url,
        ];
    }
}
