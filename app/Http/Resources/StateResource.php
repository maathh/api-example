<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class StateResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'letter' => $this->iso,
            'iso' => $this->iso,
            "links" => [
                [
                    "type" => "GET",
                    "rel" => "self",
                    "uri" => url("api/users/addresses/{$this->id}"),
                ],
            ]
        ];
    }
}
