<?php

namespace Database\Factories;

use App\Models\Barang;
use Illuminate\Database\Eloquent\Factories\Factory;

class BarangFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Barang::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama_barang' => $this->faker->sentence(1),
            'stok_barang' => $this->faker->numberBetween(0, 50),
            'harga_beli_barang'=> $this->faker->numberBetween(0, 500000),
            'harga_jual_barang'=> $this->faker->numberBetween(0, 500000),
            'id_jb'=> $this->faker->numberBetween(1, 10),
        ];
    }
}
