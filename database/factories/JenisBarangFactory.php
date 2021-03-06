<?php

namespace Database\Factories;

use App\Models\jenisBarang;
use Illuminate\Database\Eloquent\Factories\Factory;

class JenisBarangFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = jenisBarang::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'jenis_barang' => $this->faker->unique()->word()
        ];
    }
}
