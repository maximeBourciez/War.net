<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;


class ImagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Création du lien symbolique si non existant
        if (!file_exists(public_path('storage'))) {
            $this->command->warn('Création du lien symbolique vers le stockage...');
            $exitCode = \Illuminate\Support\Facades\Artisan::call('storage:link');
            if ($exitCode === 0) {
                $this->command->info('Lien symbolique créé avec succès.');
            } else {
                $this->command->error('Erreur lors de la création du lien.');
            }
        }

        // Assurez-vous que le dossier de stockage existe
        Storage::disk('public')->makeDirectory('images');

        // Données des images
        $images = [
            ['id' => 1, 'chemin' => 'storage/images/casque_m1.jpg', 'alt' => 'Casque M1'],
            ['id' => 2, 'chemin' => 'storage/images/enigma.jpg', 'alt' => 'Machine Enigma'],
            ['id' => 3, 'chemin' => 'storage/images/panzer_iv.jpg', 'alt' => 'Char Panzer IV'],
            ['id' => 4, 'chemin' => 'storage/images/grenade_manche.jpg', 'alt' => 'Grenade Manche'],
            ['id' => 5, 'chemin' => 'storage/images/grenade_mk2.jpg', 'alt' => 'Grenade Mk 2'],
            ['id' => 6, 'chemin' => 'storage/images/luger.jpg', 'alt' => 'Luger'],
            ['id' => 7, 'chemin' => 'storage/images/masque_gaz.jpg', 'alt' => 'Masque à Gaz'],
            ['id' => 10, 'chemin' => 'storage/images/tank_panzer.jpg', 'alt' => 'Tank Panzer'],
            ['id' => 11, 'chemin' => 'storage/images/Thompson_1928.jpg', 'alt' => 'Thompson 1928'],
            ['id' => 12, 'chemin' => 'storage/images/Sans titre.jpeg', 'alt' => 'Voiture du H'],
        ];

        // Insérer les données
        DB::table('image')->insert($images);
    }
}

