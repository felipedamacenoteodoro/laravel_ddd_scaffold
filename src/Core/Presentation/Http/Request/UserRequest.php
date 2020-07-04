<?php

namespace Core\Presentation\Http\Request;

use Common\Presentation\Http\Request\BaseRequest;

class UserRequest extends BaseRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [];
    }
}
