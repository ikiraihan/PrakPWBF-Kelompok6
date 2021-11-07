<?php

namespace Database\Factories;

use App\Models\Pemesanan;
use Illuminate\Database\Eloquent\Factories\Factory;

class PemesananFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Pemesanan::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'tgl_pesan'=>$this->faker->dateTime(),
            'status_pesan'=>$this->faker->randomElement(['dikemas','dikirim','diterima']),
            'user_id'=>$this->faker->numberBetween(1, 10),
            'sup_id'=>$this->faker->numberBetween(1, 5),
        ];
    }
}
