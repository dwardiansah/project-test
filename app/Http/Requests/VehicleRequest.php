<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VehicleRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $id = $this->route('vehicles');
        return [
            'name' => 'required|string|max:255',
            'plate_number' => 'required|string|max:50|unique:vehicles,plate_number,' . $id,
            'type' => 'required|in:angkutan_orang,angkutan_barang',
            'ownership' => 'required|in:rental,company',
            'fuel_type' => 'nullable|string|max:50',
        ];
    }
}
