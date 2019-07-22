<?php

namespace App\Http\Requests\Api;

use App\Exceptions\ApiFormRequestValidationException;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;

class BaseApiRequest extends FormRequest
{
    use ApiFormRequestValidationException;

    public function failedValidation (Validator $validator)
    {
        $this->hasError($validator);
    }
}
