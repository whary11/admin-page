<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = new \DateTime();

        $usuarios = [
            [
                'nombre' => 'Pablo Martinez',
                'correo' => 'pablomart81@gmail.com'
            ],
            [
                'nombre' => 'Luis Raga',
                'correo' => 'whary11@gmail.com'
            ],

        ];

        foreach ($usuarios as $key => $usuario) {
            DB::table('users')->insert([
                'created_at' => $now->format('Y-m-d H:i:s'),
                'name' => $usuario['nombre'],
                'email' => $usuario['correo'],
                'password' => bcrypt(123456),
            ]);
        }
    }
}
