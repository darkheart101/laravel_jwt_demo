<?php

namespace App\Http\Controllers\ApiControllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ApiControllers\Controller;

class PostController extends Controller
{
    public function getPosts(Request $request)
    {
        //dd($request->input());
        try {
            $user = auth()->userOrFail();
        }catch( \Tymon\JWTAuth\Exceptions\UserNotDefinedException $e)
        {
            return response()->json(['error'=>$e->getMessage()]);
        }


        return 'returning the posts';
    }
}
