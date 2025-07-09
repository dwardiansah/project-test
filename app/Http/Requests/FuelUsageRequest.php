<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FuelUsageRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $id = $this->route('fuelusages');
        return [
            'vehicle_id' => 'required',
            'driver_id' => 'required',
            'date' => 'required',
            'total_fuel' => 'required|string|max:20',
            'odometer' => 'required|string|max:20',
        ];
    }
}
