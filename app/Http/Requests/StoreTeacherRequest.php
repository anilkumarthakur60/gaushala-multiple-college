<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTeacherRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => [
                'required',
                'max:255',
            ],
            'email' => [
                'required',
                'max:255',
            ],
            'subject' => [
                'required',
                'max:30',
            ],
            'description' => [
                'required',
                'max:255',
            ],
        ];
    }
}
