<?php

namespace Database\Seeders;

use App\Models\Produto;
use Illuminate\Database\Seeder;

class ProdutoSeeder extends Seeder
{
    public function run(): void
    {
        Produto::create([
            'nome' => 'Mouse Gamer',
            'preco' => 149.90,
            'quantidade' => 12,
        ]);

        Produto::create([
            'nome' => 'Monitor LED',
            'preco' => 899.99,
            'quantidade' => 4,
        ]);

        Produto::create([
            'nome' => 'Headset',
            'preco' => 199.90,
            'quantidade' => 8,
        ]);

        Produto::create([
            'nome' => 'Webcam HD',
            'preco' => 249.50,
            'quantidade' => 6,
        ]);

        Produto::create([
            'nome' => 'Notebook',
            'preco' => 3499.99,
            'quantidade' => 2,
        ]);
    }
}