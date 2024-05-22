<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class UserAuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email'=>'required|string|email',
            'password'=>'required|min:8'
        ]);

        if (Auth::attempt($credentials)) {
            if($request->hasHeader('Accept')){
                if(str_contains($request->header('Accept'), 'text/html')){
                    $request->session()->regenerate();
                    $roles = Auth::user()->roles();
                    return redirect()->intended('/');
                }
            }
            $user = User::where('email',$credentials['email'])->first();
            $token = $user->createToken($user->name.'-AuthToken')->plainTextToken;
            return response()->json($this->responseObject($request, true, [
                'access_token' => $token,
            ]));
        }else{
            if($request->hasHeader('Accept')) {
                if (str_contains($request->header('Accept'), 'text/html')) {
                    return redirect()->intended('/')->with('message', 'Login failed');
                }
            }
            return response()->json($this->responseObject($request, false, "Invalid Credentials"),401);
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        if($request->hasHeader('Accept')) {
            if (str_contains($request->header('Accept'), 'text/html')) {
                $request->session()->invalidate();
                $request->session()->regenerateToken();
                return redirect()->intended('/')->with('message', 'Logged out');
            }
        }
        auth()->user()->tokens()->delete();
        return response()->json($this->responseObject($request, true, "Logged out"));
    }

    public function register(Request $request): \Illuminate\Http\JsonResponse
    {
        $registerUserData = $request->validate([
            'name'=>'required|string',
            'email'=>'required|string|email|unique:users',
            'password'=>'required|min:8'
        ]);
        $user = User::create([
            'name' => $registerUserData['name'],
            'email' => $registerUserData['email'],
            'password' => Hash::make($registerUserData['password']),
        ]);
        return response()->json([
            'message' => 'User Created',
        ]);
    }


}
