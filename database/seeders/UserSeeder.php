<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'=> 'Diego Alonso Ordoñez Odar',
            'email'=> 'ordonezdiego2724@gmail.com',
            'password'=> bcrypt('190375'),
        ]);


        User::factory(99)->create();
    }
}
