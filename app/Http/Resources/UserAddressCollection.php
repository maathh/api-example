<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\ResourceCollection;
use App\Models\UsersAddress;
use App\Http\Resources\UsersAddressResource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserAddressCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return parent::toArray($request);
    }

    public static function getUsers_adresses(Request $request)
    {
        $UsersAddresses = UsersAddress::where('user_id', $request->user_id);

        return UsersAddressResource::collection($UsersAddresses->get());
    }

    public static function getUsers_adressesGrouping(Request $request)
    {
        $users = DB::table('users_addresses')
            ->join('cities', 'users_addresses.city_id', '=', 'cities.id')
            ->join('states', 'cities.state_id', '=', 'states.id')
            ->select(DB::raw('count(DISTINCT user_id) as user_count'), $request->query('groupBy'))->groupBy($request->query('groupBy'));

            if($request->user_id){
                $users->where("users_addresses.user_id", '=', $request->user_id);
            }

        return $users->get();
    }
}
