<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LogosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $imagenes = [
            'logo-para-fondo-claro' => 'Logo para fondo claro.', 
            'logo-para-fondo-oscuro' => 'Logo para fondo oscuro.', 
            'logo-para-fondo-claro-horizontal' => 'Logo para fondo claro horizontal.', 
            'logo-para-fondo-claro-vertical' => 'Logo para fondo claro vertical.', 
            'logo-para-fondo-oscuro-horizontal' => 'Logo para fondo oscuro horizontal.', 
            'logo-para-fondo-oscuro-vertical' => 'Logo para fondo claro vertical', 
            'fondo-banner-principal' => 'Fondo banner principal.',
        ];
        $now = new \DateTime();

        foreach ($imagenes as $clave => $imagen){
            DB::table('imagens')->insert([
                'created_at' => $now->format('Y-m-d H:i:s'),
                'seccion' => $clave,
                'nombre' => 'public/logos/auMZtYAtCjnFYtCK9jntwu25CD2VKbanujo1SjZs.jpeg',
                'descripcion' => $imagen,
            ]);
        }
    }
}
