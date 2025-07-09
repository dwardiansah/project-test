<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FuelUsage extends Model
{
    use HasFactory;

    protected $table = 'fuel_usages';
    protected $fillable = [
        'vehicle_id',
        'driver_id',
        'date',
        'total_fuel',
        'odometer',
    ];

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }

    public function driver()
    {
        return $this->belongsTo(User::class, 'driver_id');
    }
}
