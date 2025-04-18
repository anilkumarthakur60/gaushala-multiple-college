<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBlogRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => [
                'required',
                'max:255',
            ],
            'description' => [
                'required',
                'max:255000',
            ],
            'short_description' => [
                'required',
                'max:255000',
            ],
            'tags' => [
                'required',
                'array',
            ],
            'tags.*' => [
                'required',
                'max:50',
            ],
            'image' => [
                'required',
                'image',
            ],
            'created_at' => [
                'required',
                'date',
            ],
        ];
    }
}
