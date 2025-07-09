<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Vehicle extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'type',
        'ownership',
        'fuel_type',
        'plate_number',
    ];

    public function services()
    {
        return $this->hasMany(Service::class);
    }

    public function fuelUsages()
    {
        return $this->hasMany(FuelUsage::class);
    }
}
