<?php

namespace Database\Factories;

use App\Models\detailBarang;
use Illuminate\Database\Eloquent\Factories\Factory;

class detailBarangFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = detailBarang::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'kode_bar'=>$this->faker->numberBetween(1, 10),
            'id_ukuran'=>$this->faker->numberBetween(1, 5),
            'id_warna'=>$this->faker->numberBetween(1, 20),
        ];
    }
}
