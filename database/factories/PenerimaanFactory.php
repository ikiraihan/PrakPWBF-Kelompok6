<?php

namespace Database\Factories;

use App\Models\Penerimaan;
use Illuminate\Database\Eloquent\Factories\Factory;

class PenerimaanFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Penerimaan::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'tgl_terima'=> $this->faker->dateTime(),
            'total_harga'=> $this->faker->numberBetween(0,500000),
            'status_terima'=> $this->faker->randomElement(['Diterima', 'Belum diterima']),
            'kode_user'=> $this->faker->numberBetween(1, 10),
            'kode_sup'=> $this->faker->numberBetween(1, 5),
        ];
    }
}
