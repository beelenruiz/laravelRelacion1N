<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categorias = [
            'Limpieza' => '#BA68C8',
            'Navidad' => '#D32F2F',
            'Herramientas' => '#00897B',
            'Cocina' => '#43A047',
            'Papeleria' => '#EC407A',
        ];
        ksort($categorias);

        foreach ($categorias as $nombre => $color) {
            Category::create(compact('nombre', 'color'));
        }
    }
}
