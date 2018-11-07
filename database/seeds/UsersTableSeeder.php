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
        DB::table('users')->insert([
            'created_at' => $now->format('Y-m-d H:i:s'),
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt(123456),
        ]);
    }
}
