<?php

namespace Database\Factories;

use App\Models\Dosen;
use Illuminate\Database\Eloquent\Factories\Factory;

class DosenFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Dosen::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
           'nip' => $this->faker->numberBetween(1231111, 1239999),
           'nama' => $this->faker->name,
           'noHp' => $this->faker->numberBetween(1234567, 7654321),
           'alamat' => $this->faker->address, 
        ];
    }
}
