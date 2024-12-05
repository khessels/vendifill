<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserAuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email'=>'required|string|email',
            'password'=>'required|min:8'
        ]);

        if (Auth::attempt($credentials, true)) {
            $request->session()->regenerate();
            $roles = Auth::user()->getRoleNames();
            return redirect()->intended(route('view.index'));
        }
    }
    public function logout(Request $request)
    {
        //auth('sanctum')->user()->currentAccessToken()->delete();
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->intended(route('view.index'))->with('message', 'Logged out');
    }
    public function getToken(Request $request)
    {
        $credentials = $request->validate([
            'email'=>'required|string|email',
            'password'=>'required|min:8',
            'name'=>'required|min:5'
        ]);

        if (Auth::attempt($credentials, true)) {
            $user = User::where('email',$credentials['email'])->first();
            $token = $user->createToken($credentials['name'])->plainTextToken;
            $roles = Auth::user()->getRoleNames();
            return response()->json($this->responseObject($request, true, [
                'access_token' => $token,
            ]));
        }else{
            return response()->json($this->responseObject($request, false, null, "Invalid Credentials"),401);
        }
    }
    public function tokenDelete(Request $request)
    {
        //auth('sanctum')->user()->currentAccessToken()->delete();
        $user = Auth::user();
        $user->tokens()->delete();
        $request->session()->invalidate();
        //$request->user()->currentAccessToken()->delete();
        //$user->currentAccessToken()->delete();
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
