<?php

namespace Database\Seeders;

use App\Models\Usuario;
use Illuminate\Database\Seeder;

class UsuarioAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Usuario::factory()
            ->count(1)
            ->adminRole()
            ->create([
                'nome' => 'Admin Teste',
                'email' => 'admin@email.com'
            ]);
    }
}
