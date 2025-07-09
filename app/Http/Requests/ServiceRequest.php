<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServiceRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $id = $this->route('services');
        return [
            'vehicle_id' => 'required',
            'user_id' => 'required',
            'date' => 'required',
            'odometer' => 'required|string|max:20',
            'description' => 'required|string|max:255',
        ];
    }
}
