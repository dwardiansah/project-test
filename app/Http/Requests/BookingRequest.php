<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

// app/Http/Requests/UserRequest.php
class BookingRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $id = $this->route('bookings');
        return [
            'driver_id' => 'required',
            'vehicle_id' => 'required',
            'status' => 'required',
            'approver1_id' => 'required',
            'approver2_id' => 'required',
            'start_time' => 'required',
            'end_time' => 'required',
        ];
    }
}
