<?php

namespace App\Http\Requests\Client;

use Illuminate\Foundation\Http\FormRequest;

class UpdateClientRequest extends FormRequest
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
            'client_name' => [
                //  'required',
                'string',
                'max:255',
            ],
            'contact' => [
                //  'required',
                'string',
                'max:255',
            ],
            'address' => [
                //  'required',
                'string',
                'max:255',
            ],
            'client_type' => [
                //  'required',
                'string',
                'max:255',
            ],
            'client_since' => [
                // 'required',
                'date',
            ],
            'client_status' => [
                // 'required',
                'string',
                'max:255',
            ],
        ];
    }
}
