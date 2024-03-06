<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /*1*/Permission::create(['name' => 'usuario', 'description' => 'Perfil básico, você pode apenas editar seus dados']);

        /*2*/ Permission::create(['name' => 'profiles', 'description' => 'Have access to profiles']);
        /*3*/ Permission::create(['name' => 'profiles_create', 'description' => 'Can create profiles']);
        /*4*/ Permission::create(['name' => 'profiles_read', 'description' => 'Can read profiles']);
        /*5*/ Permission::create(['name' => 'profiles_update', 'description' => 'Can update profiles']);
        /*6*/ Permission::create(['name' => 'profiles_delete', 'description' => 'Can delete profiles']);
        /*7*/ Permission::create(['name' => 'profile_permissions', 'description' => 'Has access to permission profile']);

        /*8*/ Permission::create(['name' => 'permissions', 'description' => 'Have access to permissions']);
        /*9*/ Permission::create(['name' => 'permissions_create', 'description' => 'Can create permissions']);
        /*10*/ Permission::create(['name' => 'permissions_read', 'description' => 'Can read permissions']);
        /*11*/ Permission::create(['name' => 'permissions_update', 'description' => 'Can update permissions']);
        /*12*/ Permission::create(['name' => 'permissions_delete', 'description' => 'Can delete permissions']);
        /*13*/ Permission::create(['name' => 'permission_profiles', 'description' => 'Has access to permission profile']);

        /*14*/ Permission::create(['name' => 'users', 'description' => 'Have access to users']);
        /*15*/ Permission::create(['name' => 'users_create', 'description' => 'Can create users']);
        /*16*/ Permission::create(['name' => 'users_read', 'description' => 'Can read users']);
        /*17*/ Permission::create(['name' => 'users_update', 'description' => 'Can update users']);
        /*18*/ Permission::create(['name' => 'users_delete', 'description' => 'Can delete users']);
        /*19*/ Permission::create(['name' => 'user_profile', 'description' => 'Has access to user_profile']);
        /*20*/ Permission::create(['name' => 'user_favorites', 'description' => 'Has access to user_profile']);

        /*21*/ Permission::create(['name' => 'github_users', 'description' => 'Pode ver a lista de usuários do github']);
        /*22*/ Permission::create(['name' => 'github_users_update', 'description' => 'Pode atualizar a lista de usuários do github']);
    }
}
