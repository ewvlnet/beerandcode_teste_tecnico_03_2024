<?php

namespace Database\Seeders;

use App\Models\Profile;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AttachSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /**
         * Attach permissions to profiles
         */

        $usuario = Profile::where('slug', 'usuario')->first();
        $usuario->permissions()->attach([1]);

        $gerente = Profile::where('slug', 'gerente')->first();
        $gerente->permissions()->attach([21, 22]);

        $admin = Profile::where('slug', 'administrador')->first();
        $admin->permissions()->attach([2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22]);
    }
}
