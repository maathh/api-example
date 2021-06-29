<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CityResource extends JsonResource
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
            'state' => url("api/states/{$this->state_id}"),
            'title' => $this->title,
            'iso' => $this->iso,
            "links" => [
                [
                    "type" => "GET",
                    "rel" => "self",
                    "uri" => url("api/users/addresses/{$this->id}"),
                ],
                [
                    "type" => "GET",
                    "rel" => "city_state",
                    "uri" => url("api/states/{$this->state_id}"),
                ],
            ]
        ];
    }
}
