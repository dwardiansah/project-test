<?php

namespace Database\Factories;

use App\Models\Vehicle;
use Illuminate\Database\Eloquent\Factories\Factory;

class VehicleFactory extends Factory
{
    protected $model = Vehicle::class;

    public function definition(): array
    {
        $fuelTypes = ['pertalite', 'pertamax', 'solar'];
        $types = ['angkutan_barang', 'angkutan_orang'];
        $ownerships = ['company', 'rental'];

        return [
            'name'         => $this->faker->company . ' Transport',
            'type'         => $this->faker->randomElement($types),
            'ownership'    => $this->faker->randomElement($ownerships),
            'fuel_type'    => $this->faker->randomElement($fuelTypes),
            'plate_number' => strtoupper($this->faker->bothify('N #### ??')),
        ];
    }
}
