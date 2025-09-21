<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name' => 'Notebook Dell Inspiron',
                'description' => 'Notebook de alta performance com processador Intel i7.',
                'price' => 4500.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Camiseta Básica Preta',
                'description' => 'Camiseta 100% algodão confortável e estilosa.',
                'price' => 59.90,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Fone de Ouvido Bluetooth',
                'description' => 'Fone sem fio com cancelamento de ruído.',
                'price' => 299.90,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Smartphone Samsung Galaxy',
                'description' => 'Smartphone com câmera de 108MP e 256GB de armazenamento.',
                'price' => 3500.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Tênis Esportivo Nike',
                'description' => 'Tênis leve e confortável para corrida e atividades físicas.',
                'price' => 320.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Relógio Inteligente Apple Watch',
                'description' => 'Monitoramento de saúde, notificações e design elegante.',
                'price' => 2500.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Mochila Executiva',
                'description' => 'Mochila resistente com compartimentos para notebook e acessórios.',
                'price' => 199.90,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Cadeira Gamer',
                'description' => 'Cadeira ergonômica com apoio para braços e ajuste de altura.',
                'price' => 899.90,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Teclado Mecânico RGB',
                'description' => 'Teclado mecânico com iluminação RGB e switches táteis.',
                'price' => 349.90,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Caneca Personalizada',
                'description' => 'Caneca de cerâmica com estampa divertida e resistente.',
                'price' => 39.90,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
