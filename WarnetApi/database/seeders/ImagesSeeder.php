<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;


class ImagesSeeder extends Seeder
{
    // Api link for images
    private $apiUrl = 'http://localhost:8000/images';

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Données des images
        $images = [
            ['id' => 1, 'chemin' => $this->apiUrl . '/casque_m1.jpg', 'alt' => 'Casque M1'],
            ['id' => 2, 'chemin' => $this->apiUrl . '/enigma.jpg', 'alt' => 'Machine Enigma'],
            ['id' => 3, 'chemin' => $this->apiUrl . '/panzer_iv.jpg', 'alt' => 'Char Panzer IV'],
            ['id' => 4, 'chemin' => $this->apiUrl . '/grenade_manche.jpg', 'alt' => 'Grenade Manche'],
            ['id' => 5, 'chemin' => $this->apiUrl . '/grenade_mk2.jpg', 'alt' => 'Grenade Mk 2'],
            ['id' => 6, 'chemin' => $this->apiUrl . '/luger.jpg', 'alt' => 'Luger'],
            ['id' => 7, 'chemin' => $this->apiUrl . '/masque_gaz.jpg', 'alt' => 'Masque à Gaz'],
            ['id' => 10, 'chemin' => $this->apiUrl . '/tank_panzer.jpg', 'alt' => 'Tank Panzer'],
            ['id' => 11, 'chemin' => $this->apiUrl . '/Thompson_1928.jpg', 'alt' => 'Thompson 1928'],
            ['id' => 12, 'chemin' => $this->apiUrl . '/Sans titre.jpeg', 'alt' => 'Voiture du H'],
        ];

        // Insérer les données
        DB::table('image')->insert($images);
    }
}

