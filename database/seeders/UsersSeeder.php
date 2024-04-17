<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create(
            [
                'name' => 'Andika Dwiki',
                'email' => 'andikadwiki@pm.me',
                'password' => Hash::make('password'),
                'email_verified_at' => now(),
            ]
        );
    }
}
