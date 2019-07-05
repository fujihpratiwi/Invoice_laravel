<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => 'anugrah sandi',
            'email' => 'support@daengweb.id',
            'password' => bcrypt('secret')
        ]);
    }
}