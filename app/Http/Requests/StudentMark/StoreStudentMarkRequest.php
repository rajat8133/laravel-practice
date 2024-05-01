<?php

namespace App\Http\Requests\StudentMark;

use Illuminate\Foundation\Http\FormRequest;

class StoreStudentMarkRequest extends FormRequest
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
            'marks' => [
                'required',
            ],
            'grade' => [
                'required',
                'string',
            ],
            'percentage' => [
                'required',
            ],

        ];
    }
}
