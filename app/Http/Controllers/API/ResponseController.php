<?php

namespace App\Http\Controllers\API;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller as Controller;
use App\User;

class ResponseController extends Controller
{
    
    public function sendResponse($response){
        return response()->json($response,200);

    }
    public function sendError($error, $code = 404){

        $response = [
            'error' => $error,
        ];
        return response()->json($response,$code);

    }
}
