<?php

namespace Database\Factories;

use App\Models\Cliente;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClienteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Cliente::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {   //falta por terminar
        return [
            'ticlie_id' => $this->faker,
            'national_id' => $this->faker,
            'first_name' => $this->faker,
            'last_name' => $this->faker,
            'mari_id' => $this->faker,
            'nac_id' => $this->faker,
            'sex_id' => $this->faker,
            'prof_id' => $this->faker,
            'ctv_birthdate' => $this->faker,
            'salutation_cd' => $this->faker,
            'phone' => $this->faker,
            'email_addr' => $this->faker,
            'ctv_lgr_nacimiento' => $this->faker,
            'postal' => $this->faker,
            'nied_id' => $this->faker,
            'cata_id' => $this->faker,
            'parr_id' => $this->faker,
            'address1' => $this->faker,
            'address2' => $this->faker,
            'address3' => $this->faker,
        ];
    }
}
