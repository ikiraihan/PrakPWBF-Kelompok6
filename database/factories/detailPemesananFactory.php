<?php

namespace Database\Factories;

use App\Models\detailPemesanan;
use Illuminate\Database\Eloquent\Factories\Factory;

class detailPemesananFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = detailPemesanan::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'jumlah_up'=>$this->faker->numberBetween(1, 10),
            'harga_up'=>$this->faker->numberBetween(1, 500000),
            'id_pesan'=>$this->faker->unique()->numberBetween(1, 5),
            'kode_bar'=>$this->faker->numberBetween(1, 10),
        ];
    }
}
