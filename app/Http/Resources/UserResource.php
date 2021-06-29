<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UserResource extends JsonResource
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
            'name' => $this->name,
            'email' => $this->email,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            "links" => [
                [
                    "type" => "GET",
                    "rel" => "self",
                    "uri" => url("api/users/{$this->id}"),
                ],
                [
                    "type" => "GET",
                    "rel" => "user_addresses",
                    "uri" => url("api/users/{$this->id}/addresses"),
                ],
                [
                    "type" => "PUT",
                    "rel" => "user_update",
                    "uri" => url("api/users/{$this->id}"),
                ],
                [
                    "type" => "DELETE",
                    "rel" => "user_delete",
                    "uri" => url("api/users/{$this->id}"),
                ],
                [
                    "type" => "POST",
                    "rel" => "user_new",
                    "uri" => url("api/users"),
                ],
            ]
        ];
    }
}
