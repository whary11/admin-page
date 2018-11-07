<?php

use Illuminate\Database\Seeder;

class EmpresasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('empresas')->insert([
            'telfijo' => 5165165165,
            'celular1' => 6161661651,
            'celular2' => 6161661651,
            'celular3' => 6161661651,
            'correo1' =>  'whary11@gmail.com',
            'correo2' =>  'whary11@gmail.com',
            'correo3' =>  'whary11@gmail.com',
            'direccion' => 'naskdfnas',
            'horario' => 'ansdfñknla'
        ]);
    }
}
