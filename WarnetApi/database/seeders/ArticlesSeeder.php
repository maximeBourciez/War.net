<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Artisan;


class ArticlesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Vérification et création du lien symbolique pour le stockage
        if (!file_exists(public_path('storage'))) {
            $this->command->warn('Création du lien symbolique vers le stockage...');
            Artisan::call('storage:link');
            $this->command->info('Lien symbolique créé avec succès.');
        }

        // Assurez-vous que le dossier public/images existe
        Storage::disk('public')->makeDirectory('images');

        // Données des articles
        $articles = [
            [
                'id' => 1,
                'titre' => 'Casque M1',
                'description' => 'Casque utilisé par les forces américaines durant la Seconde Guerre mondiale.',
                'descriptionLongue' => 'Le casque M1 a été adopté par l’armée américaine en 1941 et est devenu emblématique.',
                'prix' => 120,
                'quantiteDispo' => 10,
                'categorie_id' => 1,
                'image_id' => 1
            ],
            [
                'id' => 2,
                'titre' => 'Enigma',
                'description' => 'Machine de cryptage utilisée par les Allemands.',
                'descriptionLongue' => 'La machine Enigma a été développée dans les années 1920 et joua un rôle clé dans les communications allemandes.',
                'prix' => 500000,
                'quantiteDispo' => 5,
                'categorie_id' => 4,
                'image_id' => 2
            ],
            [
                'id' => 3,
                'titre' => 'Panzer IV',
                'description' => 'Char de combat allemand, modèle très utilisé sur le front.',
                'descriptionLongue' => 'Le Panzer IV fut le char de combat allemand le plus produit et utilisé durant la guerre.',
                'prix' => 300000,
                'quantiteDispo' => 2,
                'categorie_id' => 3,
                'image_id' => 3
            ],
            [
                'id' => 4,
                'titre' => 'Grenade Manche',
                'description' => 'Grenade à main utilisée par les soldats allemands.',
                'descriptionLongue' => 'La grenade à manche allemande, surnommée “Stielhandgranate”, était l\’arme de base des troupes allemandes.',
                'prix' => 25,
                'quantiteDispo' => 15,
                'categorie_id' => 7,
                'image_id' => 4
            ],
            [
                'id' => 5,
                'titre' => 'Grenade Mk 2',
                'description' => 'Grenade standard des forces américaines.',
                'descriptionLongue' => 'La grenade Mk 2, surnommée “pineapple”, fut utilisée par les soldats américains tout au long de la guerre.',
                'prix' => 30,
                'quantiteDispo' => 20,
                'categorie_id' => 6,
                'image_id' => 5
            ],
            [
                'id' => 6,
                'titre' => 'Luger',
                'description' => 'Pistolet semi-automatique utilisé par l\'armée allemande.',
                'descriptionLongue' => 'Le pistolet Luger P08 est une arme iconique de l\’armée allemande.',
                'prix' => 500,
                'quantiteDispo' => 8,
                'categorie_id' => 2,
                'image_id' => 6
            ],
            [
                'id' => 7,
                'titre' => 'Masque à Gaz',
                'description' => 'Masque utilisé pour protéger contre les gaz toxiques.',
                'descriptionLongue' => 'Les masques à gaz étaient essentiels pour la protection des soldats sur le champ de bataille.',
                'prix' => 80,
                'quantiteDispo' => 12,
                'categorie_id' => 4,
                'image_id' => 7
            ],
            [
                'id' => 10,
                'titre' => 'Tank Panzer',
                'description' => 'Tank de la Wehrmacht, célèbre pour sa robustesse.',
                'descriptionLongue' => 'Le char Panzer était un élément clé des forces blindées de l\’Allemagne nazie.',
                'prix' => 250000,
                'quantiteDispo' => 1,
                'categorie_id' => 3,
                'image_id' => 10
            ],
            [
                'id' => 11,
                'titre' => 'Thompson 1928',
                'description' => 'Mitraillette américaine de la Seconde Guerre mondiale.',
                'descriptionLongue' => 'La mitraillette Thompson 1928, également appelée “Tommy Gun”, était largement utilisée par les forces alliées.',
                'prix' => 75000,
                'quantiteDispo' => 3,
                'categorie_id' => 2,
                'image_id' => 11
            ],
            [
                'id' => 12,
                'titre' => 'Voiture d\'Adolf Hitler',
                'description' => 'Voiture officielle d\’Adolf Hitler.',
                'descriptionLongue' => 'La voiture d\’Adolf Hitler, un modèle spécialement conçu pour ses déplacements officiels, est un objet de collection rare.',
                'prix' => 6000000,
                'quantiteDispo' => 1,
                'categorie_id' => 3,
                'image_id' => 12
            ],
        ];

        // Insérer les articles dans la base de données
        DB::table('article')->insert($articles);
    }
}

