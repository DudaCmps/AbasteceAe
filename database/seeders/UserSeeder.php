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
            'matricula' => '12345-6',
            'cpf' => '12345678901',
            'data_nasc' => '1990-01-01',
        ]);
    }
}
