<?php

namespace Database\Seeders;

use App\Models\Endereco;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EnderecoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Endereco::query()->create([
            'user_id' => 1,
            'cep' => '12345-678',
            'estado' => 'SP',
            'cidade' => 'São Paulo',
            'bairro' => 'Centro',
            'logradouro' => 'Rua Principal',
            'numero' => '100',
            'complemento' => 'Apto 101',
        ]);

        Endereco::query()->create([
            'user_id' => 1,
            'cep' => '98765-432',
            'estado' => 'RJ',
            'cidade' => 'Rio de Janeiro',
            'bairro' => 'Copacabana',
            'logradouro' => 'Avenida Atlântica',
            'numero' => '200',
            'complemento' => null,
        ]);

        Endereco::query()->create([
            'user_id' => 2,
            'cep' => '54321-098',
            'estado' => 'MG',
            'cidade' => 'Belo Horizonte',
            'bairro' => 'Savassi',
            'logradouro' => 'Rua da Savassi',
            'numero' => '300',
            'complemento' => null,
        ]);
    }
}
