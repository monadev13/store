<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $user =User::create([
            'name' =>'admin',
            'email' => 'admin@admin.com',
            'password' =>123456789,

        ]);
        $this->call(SettingSeeder::class);



    }
}
