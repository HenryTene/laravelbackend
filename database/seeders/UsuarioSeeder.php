<?php

namespace Database\Seeders;

use App\Models\Usuario;
use Illuminate\Database\Seeder;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $usuario = new Usuario();
        $usuario->nombre = "Juan";
        $usuario->apellido = "Perez";
        $usuario->edad = 16;
        $usuario->save();

    }
}
