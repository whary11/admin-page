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
        $now = new \DateTime();
        DB::table('empresas')->insert([
            'created_at' => $now->format('Y-m-d H:i:s'),
            'telfijo' => 5165165165,
            'celular1' => 6161661651,
            'celular2' => 6161661651,
            'celular3' => 6161661651,
            'correo1' =>  'whary11@gmail.com',
            'correo2' =>  'whary11@gmail.com',
            'correo3' =>  'whary11@gmail.com',
            'direccion' => 'Calle 90 # 50 30 Parque la 90',
            'horario' => 'De 8 AM A 4 PM'
        ]);
    }
}
