<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\UsersAddress;
use App\Http\Resources\UsersAddressResource;
use App\Http\Resources\UserAddressCollection;
use Illuminate\Http\Request;

class UsersAddressController extends Controller
{
    public function index(Request $request)
    {
        if($request->query('groupBy')){
            return UserAddressCollection::getUsers_adressesGrouping($request);
        }else{
            return UserAddressCollection::getUsers_adresses($request);
        }
    }
 
    public function show($id)
    {
        return new UsersAddressResource(UsersAddress::findOrFail($id));
    }

}
