<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Usuário',
            'email' => 'usuario@gmail.com',
            'password' => bcrypt('123'),
            'email_verified_at' => now()
        ])->profiles()->attach([1]);

        User::create([
            'name' => 'Gerente',
            'email' => 'gerente@gmail.com',
            'password' => bcrypt('123'),
            'email_verified_at' => now()
        ])->profiles()->attach([2]);

        User::create([
            'name' => 'Administrador',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123'),
            'email_verified_at' => now()
        ])->profiles()->attach([3]);
    }
}
