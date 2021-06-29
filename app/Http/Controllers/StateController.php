<?php

namespace App\Http\Controllers;
use App\Models\State;
use App\Http\Resources\StateResource;

use Illuminate\Http\Request;

class StateController extends Controller
{
    public function index()
    {
        return StateResource::collection(State::all()->keyBy->id);
    }
 
    public function show($id)
    {
        return new StateResource(State::findOrFail($id));
    }
}
