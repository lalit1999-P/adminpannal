<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class AuthController extends Controller
{
    
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        // dd($credentials);
        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect('dashboard');
        }else{
            $msg="authentication failed";
            return redirect('/')->with('msg',$msg);
        }
    }
    
}
