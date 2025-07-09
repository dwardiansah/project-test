<?php

namespace Database\Factories;

use App\Models\Booking;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookingLogFactory extends Factory
{
    public function definition(): array
    {
        return [
            'booking_id' => Booking::inRandomOrder()->value('id'),
            'user_id' => User::inRandomOrder()->value('id'),
            'action' => $this->faker->randomElement(['created', 'pending', 'approved_1', 'approved_2', 'rejected', 'done', 'cancelled']),
            'note' => $this->faker->sentence(),
        ];
    }
}
