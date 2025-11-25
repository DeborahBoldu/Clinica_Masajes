<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Usuario administrador
        User::updateOrCreate(
            ['email' => 'admin@clinica.test'],
            [
                'name'     => 'Admin Clínica',
                'password' => Hash::make('admin123'),
                'role'     => 'admin',
            ]
        );

        // Usuario cliente
        User::updateOrCreate(
            ['email' => 'cliente@clinica.test'],
            [
                'name'     => 'Cliente Demo',
                'password' => Hash::make('cliente123'),
                'role'     => 'client',
            ]
        );
    }
}
