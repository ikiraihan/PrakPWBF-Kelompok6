<?php

namespace Database\Factories;

use App\Models\Pembayaran;
use Illuminate\Database\Eloquent\Factories\Factory;

class PembayaranFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Pembayaran::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'tgl_bayar'=>$this->faker->dateTime(),
            'total_bayar'=>$this->faker->numberBetween(0,500000),
            'id_penerimaan'=>$this->faker->numberBetween(1,5),
        ];
    }
}
