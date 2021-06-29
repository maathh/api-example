<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UsersAddressResource extends JsonResource
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
            'city' => url("api/cities/{$this->city_id}"),
            'user' => url("api/cities/{$this->user_id}"),
            'street' => $this->street,
            'district' => $this->district,
            'complement' => $this->complement,
            'post_code' => $this->post_code,
            'number' => $this->number,
            "links" => [
                [
                    "type" => "GET",
                    "rel" => "self",
                    "uri" => url("api/users/{$this->user_id}/addresses/{$this->id}"),
                ],
                [
                    "type" => "GET",
                    "rel" => "usersAdress_user",
                    "uri" => url("api/users/{$this->user_id}"),
                ],
                [
                    "type" => "GET",
                    "rel" => "usersAdress_city",
                    "uri" => url("api/cities/{$this->city_id}"),
                ],
            ]
        ];
    }
}
