<?php

namespace Common\Presentation\Http\Request;

use Illuminate\Http\JsonResponse;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\ValidationException;

class BaseRequest extends FormRequest
{
    protected function failedValidation(Validator $validator)
    {
        $response = new JsonResponse(
            [
                'status' => 'fail',
                'data' => $validator->errors()
            ],
            422
        );

        throw new ValidationException($validator, $response);
    }

    public function messages()
    {
        return [
            'required' => 'It is mandatory to inform the :attribute.'
        ];
    }
}
