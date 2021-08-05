<?php

use Illuminate\Database\Seeder;
use App\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
            'id' => '1',
            'name' => 'admin',
            'password' => bcrypt('123456'),
            'email' => 'admin@gmail.com',
        ]);
    }
}
