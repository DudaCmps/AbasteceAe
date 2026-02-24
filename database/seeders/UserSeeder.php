<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::query()->create([
           'name' => 'Maria',
            'email' => 'maria@gmail.com',
            'password' => '123456',
            'registration' => '12345-6',
            'cpf' => '12345678901',
            'date_of_birth' => '1990-01-01',
            'is_admin' => true,
        ]);

        User::query()->create([
            'name' => 'Felipe',
            'email' => 'felipe@gmail.com',
            'password' => '123456',
            'registration' => '65432-1',
            'cpf' => '12345678902',
            'date_of_birth' => '1990-01-01',
            'is_admin' => false,
        ]);
    }
}
