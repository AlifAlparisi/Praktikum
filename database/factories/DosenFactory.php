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
            'matkul_id' => $this->faker->randomELement(['1','2','3']), 
            'nip' => $this->faker->numberBetween(1231111, 1239999),
            'nama' => $this->faker->name, 
            'alamat' => $this->faker->address,
        ];
    }
}
