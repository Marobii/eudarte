<?php

use Illuminate\Database\Seeder;
use App\User;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Rodrigues',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('Rodrigues3927'),
        ]);
    }
}