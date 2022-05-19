<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\Admin::create([
            'name'=>'Admin',
            'Email' => 'admin@admin.com',
            'password'=>bcrypt('password')
        ]);

        \App\Models\User::create([
            'name'=>'User',
            'Email' => 'user@user.com',
            'password'=>bcrypt('password')
        ]);


    }
}
