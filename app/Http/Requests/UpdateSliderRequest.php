<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSliderRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(StoreSliderRequest $request): array
    {
        return [
            ...$request->rules(),
        ];
    }
}
