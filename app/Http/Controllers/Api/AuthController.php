<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if ($validator->fails()) return response()->json([
            'status' => 'false',
            'message' => implode(" - ",$validator->messages()->all())
        ], 401);

        $credentials = request(['email', 'password']);

        if (! Auth::attempt($credentials)) {
            return response()->json([
                'status' => false,
                'message' => 'Wrong email or password, please try again !'
            ]);
        }
        
        // generate token access using sanctum
        $token = $request->user()->createToken('access_token')->plainTextToken;
        return response()->json([
            'status' => true,
            'message' => $request->user(),
            'token' => $token
        ], 200);
    }

    public function logout(Request $request)
    {
        // menghapus semua access_token di table personal_access_token berdasarkan user yg login
        $request->user()->tokens()->delete();
        return response()->json([
            'status' => true,
            'message' => 'Logout successfully!'
        ]);
    }

    public function profile()
    {
        return response()->json('masuk');
    }
}