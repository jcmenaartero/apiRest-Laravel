<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Http\Requests\RegisterRequest;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AutenticateController extends Controller
{
    public function register(RegisterRequest $request)
    {
        $user = new User();
        $user->name = $request->name;    
        $user->email = $request->email;    
        $user->role = $request->role;    
        $user->password = bcrypt($request->password);
        $user->save();

        return response()->json([
            'res' => true,
            'msg' => 'User successfully registered'
        ],200);
    }

    public function login(LoginRequest $request)
    {
        $user = User::where('email', $request->email)->first();

        if (! $user || ! Hash::check($request->password, $user->password)) {
            throw ValidationException::withMessages([
                'email' => ['The provided credentials are incorrect.'],
            ]);
        }

        $token = $user->createToken($request->email)->plainTextToken;

        return response()->json([
            'res' => true,
            'msg' => 'token successfully created',
            'token' => $token
        ],200);
    }

    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();
        return response()->json([
            'res' => true,
            'msg' => 'token successfully deleted',
        ],200);
    }

    public function getUser() 
    {
            $user = Auth::user();
            return  response()->json([
                'res' => true,
                'msg' => 'Logged in user data',
                'data' => $user,
            ],200);
    }
}
