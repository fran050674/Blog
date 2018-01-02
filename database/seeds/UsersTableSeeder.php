<?php

use App\User;
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
        factory(User::class, 29)->create();

        User::create([

            'name' => 'Francisco Andrés',
            'email' => 'fran@correo.com',
            'password' => bcrypt('123'),

        ]);
    }
}
