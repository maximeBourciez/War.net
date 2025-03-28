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
                'descriptionLongue' => 'Le casque M1 a été introduit en 1941, conçu pour remplacer les précédents casques en métal utilisés par l’armée américaine. Ce modèle est devenu un symbole emblématique des forces américaines durant la Seconde Guerre mondiale, avec sa coque en acier et son système de suspension interne qui offrait un meilleur confort et une meilleure protection. Le casque M1 fut porté par les soldats de toutes les branches de l’armée et devint rapidement un objet de reconnaissance instantanée, tant pour son efficacité que pour son design distinctif. Son rôle ne se limita pas à la protection contre les éclats d’obus, il offrait aussi une capacité de camouflage et un confort dans les conditions difficiles du front.',
                'prix' => 120,
                'quantiteDispo' => 10,
                'categorie_id' => 4,
                'image_id' => 1
            ],
            [
                'id' => 2,
                'titre' => 'Enigma',
                'description' => 'Machine de cryptage utilisée par les Allemands.',
                'descriptionLongue' => 'La machine Enigma a été conçue dans les années 1920 par l’ingénieur allemand Arthur Scherbius pour sécuriser les communications militaires et diplomatiques. C’est un système de chiffrement à rotor qui, grâce à sa complexité, était censé être inviolable. Utilisée par l’armée allemande pendant la Seconde Guerre mondiale, l’Enigma a été au cœur des efforts de guerre allemands. Les messages codés envoyés par cette machine ont constitué un élément fondamental pour le commandement militaire nazi. Toutefois, l’interception et le décryptage des communications de l’Enigma par les Alliés, notamment grâce aux travaux de cryptanalystes comme Alan Turing, ont joué un rôle majeur dans la victoire des Alliés et l’échec des forces de l’Axe.',
                'prix' => 500000,
                'quantiteDispo' => 5,
                'categorie_id' => 4,
                'image_id' => 2
            ],
            [
                'id' => 3,
                'titre' => 'Panzer IV',
                'description' => 'Char de combat allemand, modèle très utilisé sur le front.',
                'descriptionLongue' => 'Le Panzer IV, introduit en 1937, fut l’un des principaux chars de combat de l’armée allemande pendant la Seconde Guerre mondiale. Au début de la guerre, il était principalement utilisé pour des missions d’assaut et de soutien. Il a évolué au fil du conflit, avec des améliorations continues dans son blindage, son armement et son moteur. Bien que dépassé par d’autres modèles, le Panzer IV resta un élément clé du matériel blindé allemand tout au long de la guerre. Son efficacité sur le terrain, notamment dans les batailles d’Afrique du Nord et sur le front de l’Est, fit de lui un char incontournable pour les forces de l’Axe. De plus, sa production en grande série permit de le maintenir en service tout au long de la guerre.',
                'prix' => 300000,
                'quantiteDispo' => 2,
                'categorie_id' => 3,
                'image_id' => 3
            ],
            [
                'id' => 4,
                'titre' => 'Grenade Manche',
                'description' => 'Grenade à main utilisée par les soldats allemands.',
                'descriptionLongue' => 'La grenade à main allemande, surnommée “Stielhandgranate”, fut l’une des armes de base les plus redoutées par les soldats alliés pendant la Seconde Guerre mondiale. Sa conception unique, avec un long manche en bois et une tête en métal, permettait une portée accrue par rapport aux grenades standard. Très efficace en combat rapproché, la “Stielhandgranate” avait un effet dévastateur contre les troupes ennemies et les véhicules légers. Son utilisation était simple, mais sa portée et sa puissance en faisaient un atout redoutable sur le champ de bataille. Sa forme et son usage spécifique la différenciaient des autres grenades, marquant une avancée dans la technologie des armes portables.',
                'prix' => 25,
                'quantiteDispo' => 15,
                'categorie_id' => 7,
                'image_id' => 4
            ],
            [
                'id' => 5,
                'titre' => 'Grenade Mk 2',
                'description' => 'Grenade standard des forces américaines.',
                'descriptionLongue' => 'La grenade Mk 2, surnommée “pineapple” en raison de sa forme, fut utilisée par les forces américaines pendant la Seconde Guerre mondiale. Sa conception, avec des rainures sur son corps métallique, lui permettait de se fragmenter efficacement lors de l’explosion, causant de lourdes pertes parmi les troupes ennemies. La Mk 2 était souvent utilisée lors des combats rapprochés, notamment dans les tranchées ou dans les zones urbaines. Sa simplicité de conception et sa fiabilité en faisaient un choix privilégié pour les soldats américains, qui en possédaient de grandes quantités. Cependant, son utilisation nécessitait une manipulation prudente en raison du risque de blessures pour l’utilisateur en cas d’erreur.',
                'prix' => 30,
                'quantiteDispo' => 20,
                'categorie_id' => 7,
                'image_id' => 5
            ],
            [
                'id' => 7,
                'titre' => 'Masque à Gaz',
                'description' => 'Masque utilisé pour protéger contre les gaz toxiques.',
                'descriptionLongue' => 'Le masque à gaz a été une pièce essentielle du matériel militaire pendant la Première et la Seconde Guerre mondiale, offrant une protection contre les attaques chimiques. En particulier pendant la Seconde Guerre mondiale, les masques à gaz étaient utilisés pour protéger les soldats contre les gaz de combat, tels que le gaz moutarde ou le phosgène, qui pouvaient causer des blessures graves ou la mort. Ces masques étaient conçus avec des filtres qui absorbaient les agents chimiques, offrant une barrière entre le porteur et l’air contaminé. Leur importance ne se limita pas aux champs de bataille ; les populations civiles et les travailleurs en zone industrielle étaient également équipés de ces masques face à la menace de bombardements chimiques.',
                'prix' => 80,
                'quantiteDispo' => 12,
                'categorie_id' => 4,
                'image_id' => 7
            ],
            [
                'id' => 10,
                'titre' => 'Tank Panzer',
                'description' => 'Tank de la Wehrmacht, célèbre pour sa robustesse.',
                'descriptionLongue' => 'Le char Panzer fut l’une des pierres angulaires de la Wehrmacht, l’armée allemande, durant la Seconde Guerre mondiale. Sa conception était axée sur la mobilité, la puissance de feu et une certaine protection, bien que ses défauts, notamment son blindage insuffisant face aux armes alliées plus modernes, soient apparus avec le temps. Les Panzers étaient utilisés pour des attaques en profondeur et des percées, exploitant la rapidité et la surprise pour déstabiliser les lignes ennemies. Cependant, au fur et à mesure de la guerre, les alliés commencèrent à contre-attaquer plus efficacement avec des armements plus puissants, rendant les Panzers vulnérables aux attaques aériennes et aux armes antichars.',
                'prix' => 250000,
                'quantiteDispo' => 1,
                'categorie_id' => 3,
                'image_id' => 10
            ],
            [
                'id' => 11,
                'titre' => 'Thompson 1928',
                'description' => 'Mitraillette américaine de la Seconde Guerre mondiale.',
                'descriptionLongue' => 'La mitraillette Thompson 1928, également surnommée “Tommy Gun”, est l’un des fusils d’assaut les plus célèbres utilisés pendant la Seconde Guerre mondiale. Avec son design distinctif et sa cadence de tir rapide, elle devint un symbole des forces américaines, notamment pendant les débarquements en Normandie et les combats dans le Pacifique. Sa puissance de feu et sa capacité à tirer en rafale en faisaient une arme redoutable en combat rapproché. Bien que lourde et difficile à manier dans certaines situations, la Thompson 1928 fut largement utilisée par les soldats américains et par d’autres alliés, devenant une icône de la guerre.',
                'prix' => 75000,
                'quantiteDispo' => 3,
                'categorie_id' => 2,
                'image_id' => 11
            ],
            [
                'id' => 12,
                'titre' => 'Voiture d\'Adolf Hitler',
                'description' => 'Voiture officielle d\’Adolf Hitler.',
                'descriptionLongue' => 'La voiture personnelle d’Adolf Hitler, un modèle très exclusif conçu spécialement pour ses déplacements, était un symbole du pouvoir nazi. Ce véhicule de luxe, souvent vu lors des cérémonies officielles ou des déplacements stratégiques, était conçu pour offrir un confort exceptionnel à son occupant tout en restant discret. Bien que la voiture fût avant tout un outil de transport, elle devint aussi un symbole de l’autorité et de l’arrogance du régime nazi. La rareté de ces voitures en fait aujourd’hui un objet très recherché par les collectionneurs et les historiens, notamment pour leur valeur historique et leur lien direct avec le Führer.',
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

