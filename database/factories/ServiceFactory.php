<?php

namespace Database\Factories;

use App\Models\Service;
use App\Models\User;
use App\Models\Vehicle;
use Illuminate\Database\Eloquent\Factories\Factory;

class ServiceFactory extends Factory
{
    protected $model = Service::class;

    public function definition(): array
    {
        return [
            'vehicle_id'  => Vehicle::inRandomOrder()->value('id'),
            'user_id'     => User::where('role', 'driver')->inRandomOrder()->value('id'),
            'date'        => $this->faker->dateTimeBetween('-1 year', 'now')->format('Y-m-d'),
            'odometer'    => $this->faker->numberBetween(10000, 150000),
            'description' => $this->faker->sentence(6),
        ];
    }
}
