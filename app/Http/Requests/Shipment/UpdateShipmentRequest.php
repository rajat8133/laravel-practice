<?php

namespace App\Http\Requests\Shipment;

use Illuminate\Foundation\Http\FormRequest;

class UpdateShipmentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'tracking_number' => [
                'required',
                'string',
                'max:255',

            ],

            'shipment_status' => [
                'required',
                'string',
                'max:255',

            ],

            'carrier_name' => [
                'required',
                'string',
                'max:255',

            ],

            'destination' => [
                'required',
                'string',
                'max:255',

            ],

            'order_number' => [
                'required',
                'string',
                'max:255',

            ],

            'shipment_date' => [
                'required',
                'date',
            ],
        ];
    }
}
