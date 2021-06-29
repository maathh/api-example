<?php

namespace App\Http\Controllers;
use App\Models\City;
use App\Http\Resources\CityResource;

use Illuminate\Http\Request;

class CityController extends Controller
{
    public function index(Request $request)
    {
        return CityResource::collection(City::all()->keyBy->id);
    }
 
    public function show($id)
    {
        return new CityResource(City::findOrFail($id));
    }
}
