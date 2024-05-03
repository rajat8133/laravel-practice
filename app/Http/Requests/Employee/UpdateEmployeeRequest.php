<?php

namespace App\Http\Requests\Employee;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEmployeeRequest extends FormRequest
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
        $return = [
            'first_name' => [
                'required',
                'string',
            ],
            'last_name' => [
                'required',
                'string',
            ],
            'department' => [
                'required',
                'string',
            ],
            'age' => [
                'required',
            ],
            'email' => [
                'required',
            ],
        ];
        $numbers = 'phone_numbers.*.';

        $returnNumbers = [

            $numbers.'number' => [
                'required',
                'string',
            ],
        ];

        return collect($return)->merge(collect($returnNumbers))->toArray();

    }
}
