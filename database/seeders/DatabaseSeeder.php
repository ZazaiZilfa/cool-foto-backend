<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory()->create([
            'name' => 'zazai',
            'email' => 'zazai@gmail.com',
            'password' => Hash::make('123123'),
            'roles' => '1',
            'kodeUser' => 'POS' . '000',
            'rekenings' => '018230812038120',
        ]);

        \App\Models\User::factory(5)->create();
    }
}
