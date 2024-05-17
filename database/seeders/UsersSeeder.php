<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function users(): array
    {
        $users                  = [];

        $user['name']           = 'Kees Hessels';
        $user['email']          = 'kees.hessels@gmail.com';
        $user['password']       = Hash::make('Hades666');
        $user['permissions']    = ['super user'];
        $user['roles']          = [
            'retailer',
            'back-end',
            'vendor',
            'filler',
            'loan supplier',
            'insurance supplier',
            'service supplier',
            ];

        $users[]                = $user;
        return $users;
    }
    public function run(): void
    {
        foreach($this->users() as $key => $aUser){
            $roles = $aUser['roles'];
            $permissions = $aUser['permissions'];

            $user = User::create([ 'name' => $aUser['name'], 'email' => $aUser['email'], 'password' => $aUser['password'] ]);
            foreach($roles as $key => $role){
                $user->assignRole($role);
            }
            foreach($permissions as $key => $permission){
                $user->givePermissionTo($permission);
            }
        }
    }
}
