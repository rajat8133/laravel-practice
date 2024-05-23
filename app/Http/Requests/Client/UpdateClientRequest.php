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
                'nullable',
                'string',
                'max:255',
            ],
            'contact' => [
                'nullable',
                'string',
                'max:10',
            ],
            'address' => [
                'nullable',
                'string',
                'max:255',
            ],
            'client_type' => [
                'nullable',
                'string',
                'max:255',
            ],
            'client_since' => [
                'nullable',
                'date',
            ],
            'client_status' => [
                'nullable',
                'string',
                'max:255',
            ],
        ];
    }
}
