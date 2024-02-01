<?php

namespace App\Http\Controllers\Api\V1\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(Request $request){

        $data = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'user_type' => 'user',
            'password' => bcrypt($request->password),
        ]);
        $meta = [
            'status' => 200,
            'message' => 'Register Success',
            'data' => $data,
            'total' => 0
        ];
        return ApiResource($meta);
    }

    public function profile(){
        $meta = [
            'status' => 200,
            'message' => 'Profile Success',
            'data' => Auth::user(),
            'total' => 0
        ];
        return ApiResource($meta);
    }

    public function login(Request $request){
        $data = [
            'email' => $request->email,
            'password' => $request->password,
        ];
        if(!Auth::attempt($data)){
            $meta = [
                'status' => 401,
                'message' => 'Login Failed',
                'data' => [],
                'total' => 0
            ];
            return ApiResource($meta);
        }
        $user = Auth::user();
        $token = $user->createToken('auth_token')->accessToken;
        $meta = [
            'status' => 200,
            'message' => 'Login Success',
            'data' => $token,
            'total' => 0
        ];
        return ApiResource($meta);
    }

    public function forgotPassword(Request $request){
        $meta = [
            'status' => 200,
            'message' => 'Forgot Password Success',
            'data' => [],
            'total' => 0
        ];
        return ApiResource($meta);
    }

    public function changePassword(Request $request){
        $meta = [
            'status' => 200,
            'message' => 'Change Password Success',
            'data' => [],
            'total' => 0
        ];
        return ApiResource($meta);
    }
}
