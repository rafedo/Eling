<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $validateData = $request -> validate([
            'name' => 'required',
            'email' => 'email|required',
            'password' => 'required',
            'confirm_password' => 'required|same:password'
        ]);

        $validateData['password'] = Hash::make($request->password);

        $user = User::create($validateData);

        $accessToken = $user -> createToken('authToken') -> plainTextToken;

        // return response(['user' => $user, 'access_token' => $accessToken], 201);
        return response() -> json([
            'user' => $user, 
            'access_token' => $accessToken
        ]);
    }

    public function login(Request $request)
    {
        $loginData = $request -> validate([
            'email' => 'email|required',
            'password' => 'required'
        ]);

        if(!auth() -> attempt($loginData)) {
            return response(['message' => 'User Tidak Terdaftar'], 400);
        }


        $accessToken = auth() -> user() -> createToken('authToken') -> plainTextToken;
        return response(['user' => auth() -> user(), 'access_token' => $accessToken]);
    }
        
}
 