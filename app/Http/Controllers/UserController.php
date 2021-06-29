<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Resources\UserResource;

class UserController extends Controller
{

    public function index()
    {
        return UserResource::collection(User::all()->keyBy->id);
    }


    public function show($id)
    {
        return new UserResource(User::findOrFail($id));
    }
    

    public function store(Request $request)
    {
        $user =  User::create($request->all());
        return response()->json($user, 201);
    }

    public function update(Request $request, $id)
    {
        $User = User::findOrFail($id);
        $User->update($request->all());

        return response()->json($User, 200);
    }

    public function delete(Request $request, $id)
    {
        $User = User::findOrFail($id);
        $User->delete();

        return response()->json(null, 204);
    }
}
