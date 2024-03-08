<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class ProperietorController extends Controller 
{
    public function SignUp(Request $request)
    {
        $validator = $this->validate($request, [
            'email' => 'required|email|unique:users'
        ]);
        
    
        if ($validator->fails()) {
            return response()->json(['error' => $validator->errors()], 400);
        }

        return response()->json(200);
    }
}