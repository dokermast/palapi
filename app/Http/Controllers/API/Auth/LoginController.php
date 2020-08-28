<?php

namespace App\Http\Controllers\API\Auth;

use App\Http\Controllers\API\Controller;
use Illuminate\Http\Request;
use App\Log;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $creds = $request->only(['email', 'password']);

        $log = new Log();
        $log->log = json_encode($creds);
        $log->save();

        return (!$token = auth()->attempt($creds)) ?
            response()->json(['error' => true, 'message' => "Incorrect Login, Password"], 401) :
            response()->json(['token' => $token]);
    }

    public function refresh() {
        try {
            $token = auth()->refresh();
        } catch (\Tymon\JWTAuth\Exceptions\TokenInvalidException $e) {
            return response()->json(['error' => true, 'message' => $e->getMessage()], 401);
        }
        return response()->json(['token' => $token]);
    }
}




//        if (!$token = auth()->attempt($creds)) {
//            return response()->json(['error' => true, 'message' => "Incorrect Login, Password"], 401);
//        }
//        return response()->json(['token' => $token]);
