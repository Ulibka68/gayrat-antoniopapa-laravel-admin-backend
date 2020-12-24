<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserCreateRequest;
use App\Http\Resources\UserResource;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Symfony\Component\HttpFoundation\Response;

class UserController extends Controller
{

    public function index()
    {
        $users = User::paginate();
        return $users;
    }


    public function show($id)
    {

        $user = User::find($id);

        return new UserResource($user);
    }


    public function store(UserCreateRequest $request)
    {

        $user = User::create(
            $request->only('first_name', 'last_name', 'email', 'role_id')
            + ['password' => Hash::make(1234)]
        );

        return response(new UserResource($user), Response::HTTP_CREATED);
    }


    public function destroy($id)
    {

        User::destroy($id);

        return response(null, Response::HTTP_NO_CONTENT);
    }


}
