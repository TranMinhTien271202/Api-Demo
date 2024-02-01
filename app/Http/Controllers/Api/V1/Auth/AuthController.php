<?php

namespace App\Http\Controllers\Api\V1\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(Request $request){
        $meta = [
            'status' => 200,
            'message' => 'Register Success',
            'data' => [],
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
        $meta = [
            'status' => 200,
            'message' => 'Login Success',
            'data' => [],
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
