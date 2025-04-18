<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTeacherRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(StoreTeacherRequest $request): array
    {
        return [
            ...$request->rules(),
        ];
    }
}
