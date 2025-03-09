<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Ajout des catégories
        $categories = [
            ['id' => 1, 'nom' => 'Vêtements'],
            ['id' => 2, 'nom' => 'Armes'],
            ['id' => 3, 'nom' => 'Véhicules'],
            ['id' => 4, 'nom' => 'Équipements'],
            ['id' => 5, 'nom' => 'Uniformes'],
            ['id' => 6, 'nom' => 'Décorations'],
            ['id' => 7, 'nom' => 'Grenades'],
        ];

        DB::table('categorie')->insert($categories);
    }
}
