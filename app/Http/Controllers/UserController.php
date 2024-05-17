<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function profile(){
        $user = Auth::user();
        $aRoles = [];
        foreach($user->getRoleNames() as $role){
            $aRoles[] = $role;
        }
        unset($user->roles); // it has the roles filled by default by spatie permissions
        $user->roles = $aRoles;

        return $user;
    }
}
