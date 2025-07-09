<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'vehicle_id',
        'driver_id',
        'approver1_id',
        'approver2_id',
        'start_time',
        'end_time',
        'status',
    ];

    // Relasi ke User
    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }

    public function driver()
    {
        return $this->belongsTo(User::class, 'driver_id');
    }

    public function approver1()
    {
        return $this->belongsTo(User::class, 'approver1_id');
    }

    public function approver2()
    {
        return $this->belongsTo(User::class, 'approver2_id');
    }

    public function scopeApprover($query, $approverId)
    {
        return $query->where('approver1_id', $approverId)
            ->orWhere('approver2_id', $approverId);
    }
}
