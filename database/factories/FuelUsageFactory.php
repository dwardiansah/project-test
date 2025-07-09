<?php

namespace Database\Factories;

use App\Models\FuelUsage;
use App\Models\Vehicle;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class FuelUsageFactory extends Factory
{
    protected $model = FuelUsage::class;

    public function definition(): array
    {
        return [
            'vehicle_id'  => Vehicle::inRandomOrder()->value('id'),
            'driver_id'   => User::where('role', 'driver')->inRandomOrder()->value('id'),
            'date'        => $this->faker->dateTimeBetween('-6 months', 'now')->format('Y-m-d'),
            'total_fuel'  => $this->faker->randomFloat(2, 5, 60),
            'odometer'    => $this->faker->numberBetween(10000, 200000),
        ];
    }
}
