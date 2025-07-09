<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Vehicle;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class BookingFactory extends Factory
{
    public function definition(): array
    {
        $start = Carbon::instance($this->faker->dateTimeBetween('+1 days', '+5 days'));
        $end = (clone $start)->addHours($this->faker->numberBetween(1, 8));

        return [
            'user_id' => User::where('role', 'admin')->inRandomOrder()->value('id'),
            'vehicle_id' => Vehicle::inRandomOrder()->value('id'),
            'driver_id' => User::where('role', 'driver')->inRandomOrder()->value('id'),
            'approver1_id' => User::where('role', 'approver')->inRandomOrder()->value('id'),
            'approver2_id' => User::where('role', 'approver')->inRandomOrder()->value('id'),
            'start_time' => $start,
            'end_time' => $end,
            'status' => $this->faker->randomElement([
                'created', 'pending', 'approved_1', 'approved_2', 'rejected', 'done', 'cancelled'
            ]),
        ];
    }
}
