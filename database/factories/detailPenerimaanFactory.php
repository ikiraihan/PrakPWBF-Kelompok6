<?php

namespace Database\Factories;

use App\Models\detailPenerimaan;
use Illuminate\Database\Eloquent\Factories\Factory;

class detailPenerimaanFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = detailPenerimaan::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'harga_his'=>$this->faker->numberBetween(0, 500000),
            'jumlah_his'=>$this->faker->numberBetween(1, 10),
            'sub_total'=>$this->faker->numberBetween(0, 1000000),//harusnya perkalian  harga kali jumlah
            'id_terima'=>$this->faker->numberBetween(1, 5),
            'kode_barang'=>$this->faker->numberBetween(1, 10),
        ];
    }
}
