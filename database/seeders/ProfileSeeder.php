<?php

namespace Database\Seeders;

use App\Models\Profile;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $usuario = Profile::create([
            'name' => 'Usuario',
            'slug' => 'usuario',
            'description' => 'Alguém que pode apenas gerenciar seu perfil'
        ]);

        $gerente = Profile::create([
            'name' => 'Gerente',
            'slug' => 'gerente',
            'description' => 'Alguém que pode ver e atualizar os usuários da listagem do github'
        ]);

        $admin = Profile::create([
            'name' => 'Administrador',
            'slug' => 'administrador',
            'description' => 'Alguém que tem acesso a todos os recursos de administração'
        ]);
    }
}
