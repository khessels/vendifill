<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function profile(){
        $user = Auth::user();
        $user->roles = $user->getRoleNames()->pluck("name");
        $user->permissions = $user->getPermissionNames()->pluck("name") ;
        return $user;
    }
}
