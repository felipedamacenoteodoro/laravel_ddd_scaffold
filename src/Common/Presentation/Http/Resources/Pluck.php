<?php

namespace Common\Presentation\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Pluck extends JsonResource
{
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
        ];
    }
}
