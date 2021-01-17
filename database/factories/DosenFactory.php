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
            'nip' => $this->faker->numberBetween(1221100, 1221120),
            'name' => $this->faker->name,
            'matkul' => $this->faker->randomElement(['WEB', 'KCB', 'KI']),
            'alamat' => $this->faker->address,
        ];
    }
}
