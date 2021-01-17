<?php

namespace Database\Factories;

use App\Models\Mahasiswa;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


class MahasiswaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Mahasiswa::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'organization_id' => $this->faker->randomElement(['1','2']),
            'npm' => $this->faker->numberBetween(187006038, 187006055),
            'name' => $this->faker->name,
            'slug' => Str::slug($this->faker->sentence()),
            'class' => $this->faker->randomElement(['A', 'B', 'C']),
            'alamat' => $this->faker->address,
        ];
    }
}
