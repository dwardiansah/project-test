<?php

namespace Database\Seeders;

use App\Models\Booking;
use App\Models\BookingLog;
use App\Models\FuelUsage;
use App\Models\Service;
use App\Models\User;
use App\Models\Vehicle;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Administrator',
            'email' => 'admin@test.com',
            'password' => Hash::make('password'),
            'role' => 'admin',
        ]);

        User::factory()->create([
            'name' => 'Approver1',
            'email' => 'approver1@test.com',
            'password' => Hash::make('password'),
            'role' => 'approver',
        ]);

        User::factory()->create([
            'name' => 'Approver2',
            'email' => 'approver2@test.com',
            'password' => Hash::make('password'),
            'role' => 'approver',
        ]);

        User::factory()->count(22)->create();
        Vehicle::factory()->count(25)->create();

        Service::factory()->count(100)->create();
        FuelUsage::factory()->count(100)->create();

        Booking::factory()->count(100)->create();
        BookingLog::factory()->count(100)->create();
    }
}
