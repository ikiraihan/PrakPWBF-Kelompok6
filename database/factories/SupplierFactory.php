<?php

namespace Database\Factories;

use App\Models\Supplier;
use Illuminate\Database\Eloquent\Factories\Factory;

class SupplierFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Supplier::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama_sup'=>$this->faker->company,
            'alamat_sup'=>$this->faker->address,
            'telp_sup'=>'+628'.mt_rand(1111111111,9999999999),
            'kode_kota'=>$this->faker->numberBetween(1, 50),
        ];
    }
}
