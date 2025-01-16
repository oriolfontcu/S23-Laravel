<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                "name" => "string|required",
                "email" => "string|required|email",
                "password" => "string|required"
            ]
        );

        if ($validator->fails()) {
            return response([
                "name" => $request->name,
                "email" => $request->email,
                "password" => $request->password
            ], 400);
        }

        $user = User::create([
            "name" => $request->name,
            "email" => $request->email,
            "password" => bcrypt($request->password)
        ]);

        return response()->json($user, 201);
    }

    public function login(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                "email" => "string|required|email",
                "password" => "string|required"
            ]
        );

        if ($validator->fails()) {
            return response([
                "email" => $request->email,
                "password" => $request->password
            ], 400);
        }

        if (!Auth::attempt($request->all())) {
            return response(["error" => "User not match"], 400);
        }

        $token = auth()->user()->createToken('Auth token');
        $res = [
            'token' => $token,
            'plain' => $token->plainTextToken,
            'expiration' => 120,
        ];
        return response()->json($res);
    }
}
