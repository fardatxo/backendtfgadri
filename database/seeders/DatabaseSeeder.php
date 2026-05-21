<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        if (\App\Models\User::count() === 0) {
            \App\Models\User::create([
                'name' => 'Administrador',
                'email' => 'admin@chics.com',
                'password' => \Illuminate\Support\Facades\Hash::make('admin1234'),
            ]);
        }

        $this->call([
            ProductSeeder::class,
        ]);
    }
}
