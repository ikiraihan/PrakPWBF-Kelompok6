<?php

namespace Database\Factories;

use App\Models\TabelUser;
use Illuminate\Database\Eloquent\Factories\Factory;

class TabelUserFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = TabelUser::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nama_user' => $this->faker->name,
            'alamat_user'=> $this->faker->address,
            'telp_user'=> $this->faker->phoneNumber,
            'username_user'=> $this->faker->unique->userName,
            'password_user' => $this->faker->password(8, 32),
            'id_kota' => $this->faker->numberBetween(1, 50),
            'id_role' => '1',
        ];
    }
}