<?php

namespace Database\Seeders;

use App\Models\old\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Hash;

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
        $user['super_admin']    = true;
        $user['user_type']      = 'user';
        $user['roles']          = config('constants.roles');
        $user['permissions']    = config('constants.permissions');
        $users[]                = $user;

        $user['name']           = 'strapi production';
        $user['status']         = 'active';
        $user['reason']         = 'seed';
        $user['rating']         = 5;
        $user['email_verified_at'] = Carbon::now()->toIso8601String();
        $user['email']          = 'strapi@vendifill.com';
        $user['password']       = Hash::make('Hades666');
        $user['super_admin']    = false;
        $user['user_type']      = "service";
        $user['roles']          = [ ['name' => 'strapi'] ];
        $user['permission']     = [ 'content-flush' ];
        $users[]                = $user;

        return $users;
    }
    public function run(): void
    {
        $superAdminPassword = $this->command->ask("Set super admin password", 'Hades666');
        $superAdminEmail = $this->command->ask("Set super admin email", 'kees.hessels@gmail.com');
        $this->command->info('Credentials for Kees Hessels ( ' . $superAdminEmail . ' ): ' . $superAdminPassword);
        $this->command->info('*******');

        foreach($this->users() as $aUser){
            if($aUser['super_admin']){
                $aUser['email'] = $superAdminEmail;
                $aUser['password'] = Hash::make($superAdminPassword);;
            }

            $user = User::create([ 'name' => $aUser['name'], 'email' => $aUser['email'], 'password' => $aUser['password'] ]);
            foreach($aUser['roles'] as $role ){
                // echo print_r($role, true);
                $user->assignRole( $role['name'] );
            }
            foreach($aUser['permissions'] as $permission ){
                // echo print_r($role, true);
                $user->givePermissionTo( $permission );
            }
        }
    }
}
