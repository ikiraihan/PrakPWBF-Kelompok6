<?php

namespace Database\Factories;

use App\Models\Hs;
use Illuminate\Database\Eloquent\Factories\Factory;

class HsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Hs::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'tgl_hs'=> $this->faker->dateTime(),
            'update_stok_hs'=> $this->faker->numberBetween(0,50),
            'status'=> $this->faker->randomElement(['Bertambah','Berkurang']),
            'kode_bar'=>$this->faker->numberBetween(1, 10),
        ];
    }
}
