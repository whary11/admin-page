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
            'logo-para-fondo-claro-vertical' => 'Logo para fondo claro vertical', 
            'fondo-banner-principal' => 'Fondo banner principal.',
        ];
        foreach ($imagenes as $clave => $imagen){
            DB::table('imagens')->insert([
                'seccion' => $clave,
                'nombre' => 'public/logos/SPz18g25ielmJC6xDnWff7EEW9lIrjBFFBEFN9qU.jpeg',
                'descripcion' => $imagen,
            ]);
        }
    }
}
