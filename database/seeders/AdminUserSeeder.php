<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;

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
            'name' => 'Admin',
            'email' => 'mognyan@gmail.com',
            'password' => Hash::make('111111111'),
        ]);

        User::create([
            'name' => 'User',
            'email' => 'mognian@gmail.com',
            'password' => Hash::make('111111111'),
        ]);
    }
}
