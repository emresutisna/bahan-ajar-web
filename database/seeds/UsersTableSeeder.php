<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
		DB::table('users')->insert([
            'nama' => 'Nanang Sutisna',
            'email' => 'emresutisna@gmail.com',
            'password' => Hash::make('123456')
        ]);
    }
}
