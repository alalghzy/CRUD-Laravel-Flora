<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role_admin = Role::updateOrCreate(
            [
                'name' => 'admin',
            ], ['name' => 'admin']
        );

        $role_user = Role::updateOrCreate(
            [
                'name' => 'user',
            ], ['name' => 'user']
        );

        $permission = Permission::updateOrCreate(
            [
                'name'  =>  'view_dashboard',
            ],[ 'name'  =>  'view_dashboard']
        );

        $permission2 = Permission::updateOrCreate(
            [
                'name'  =>  'view_profile',
            ],[ 'name'  =>  'view_profile']
        );

        $role_admin->givePermissionTo($permission);
        $role_user->givePermissionTo($permission2);

        $admin= User::find(1);
        $user= User::find(2);

        $admin->assignRole('admin');
        $user->assignRole('user');


    }
}
