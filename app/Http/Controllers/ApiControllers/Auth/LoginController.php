<?php

namespace App\Http\Controllers\ApiControllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\ApiControllers\Controller;

class LoginController extends Controller
{
   public function login(Request $request)
   {
        $creds = $request->only(['email','password']);

        //$token = auth()->attempt($creds);

        if( !$token = auth()->attempt($creds) ){
            return response()->json(['error'=> 'Bad Credentials'],401);
        }

        return response()->json(['token'=>$token]);
   }
}
