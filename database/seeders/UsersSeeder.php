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
        $user['status']         = 'active';
        $user['reason']         = 'seed';
        $user['rating']         = 5;
        $user['email']          = 'kees.hessels@gmail.com';
        $user['password']       = Hash::make('Hades666');
        $user['permissions']    = ['super user'];
        $user['super-admin']    = true;
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
        $superAdminPassword = $this->command->ask("Set super admin password", 'Hades666');
        $superAdminEmail = $this->command->ask("Set super admin email", 'kees.hessels@gmail.com');
        $this->command->info('Credentials for Kees Hessels ( ' . $superAdminEmail . ' ): ' . $superAdminPassword);
        $this->command->info('*******');

        foreach($this->users() as $key => $aUser){
            $roles = $aUser['roles'];
            $permissions = $aUser['permissions'];
            if($aUser['super-admin']){
                $aUser['email'] = $superAdminEmail;
                $aUser['password'] = Hash::make($superAdminPassword);;
            }
            unset($aUser['super-admin']);
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
