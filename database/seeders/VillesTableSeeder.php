<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VillesTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('villes')->insert([
            ['nom' => 'Paris', 'latitude' => 48.8566, 'longitude' => 2.3522],
            ['nom' => 'Marseille', 'latitude' => 43.2965, 'longitude' => 5.3698],
            ['nom' => 'Lyon', 'latitude' => 45.7640, 'longitude' => 4.8357],
            ['nom' => 'Toulouse', 'latitude' => 43.6047, 'longitude' => 1.4442],
            ['nom' => 'Nice', 'latitude' => 43.7102, 'longitude' => 7.2620],
            ['nom' => 'Nantes', 'latitude' => 47.2184, 'longitude' => -1.5536],
            ['nom' => 'Strasbourg', 'latitude' => 48.5734, 'longitude' => 7.7521],
            ['nom' => 'Montpellier', 'latitude' => 43.6119, 'longitude' => 3.8772],
            ['nom' => 'Bordeaux', 'latitude' => 44.8378, 'longitude' => -0.5792],
            ['nom' => 'Lille', 'latitude' => 50.6292, 'longitude' => 3.0573],
            ['nom' => 'Rennes', 'latitude' => 48.1173, 'longitude' => -1.6778],
            ['nom' => 'Reims', 'latitude' => 49.2583, 'longitude' => 4.0317],
            ['nom' => 'Le Havre', 'latitude' => 49.4944, 'longitude' => 0.1079],
            ['nom' => 'Saint-Étienne', 'latitude' => 45.4397, 'longitude' => 4.3872],
            ['nom' => 'Toulon', 'latitude' => 43.1242, 'longitude' => 5.9280],
            ['nom' => 'Angers', 'latitude' => 47.4784, 'longitude' => -0.5632],
            ['nom' => 'Grenoble', 'latitude' => 45.1885, 'longitude' => 5.7245],
            ['nom' => 'Dijon', 'latitude' => 47.3220, 'longitude' => 5.0415],
            ['nom' => 'Nîmes', 'latitude' => 43.8367, 'longitude' => 4.3601],
            ['nom' => 'Aix-en-Provence', 'latitude' => 43.5297, 'longitude' => 5.4474],
            ['nom' => 'Brest', 'latitude' => 48.3904, 'longitude' => -4.4861],
            ['nom' => 'Limoges', 'latitude' => 45.8336, 'longitude' => 1.2611],
            ['nom' => 'Tours', 'latitude' => 47.3941, 'longitude' => 0.6848],
            ['nom' => 'Amiens', 'latitude' => 49.8941, 'longitude' => 2.2957],
            ['nom' => 'Metz', 'latitude' => 49.1193, 'longitude' => 6.1757],
            ['nom' => 'Perpignan', 'latitude' => 42.6886, 'longitude' => 2.8948],
            ['nom' => 'Besançon', 'latitude' => 47.2378, 'longitude' => 6.0241],
            ['nom' => 'Orléans', 'latitude' => 47.9029, 'longitude' => 1.9093],
            ['nom' => 'Rouen', 'latitude' => 49.4432, 'longitude' => 1.0993],
            ['nom' => 'Mulhouse', 'latitude' => 47.7508, 'longitude' => 7.3359],
            ['nom' => 'Caen', 'latitude' => 49.1829, 'longitude' => -0.3707],
            ['nom' => 'Nancy', 'latitude' => 48.6921, 'longitude' => 6.1844],
            ['nom' => 'Argenteuil', 'latitude' => 48.9472, 'longitude' => 2.2467],
            ['nom' => 'Saint-Denis', 'latitude' => 48.9356, 'longitude' => 2.3539],
            ['nom' => 'Roubaix', 'latitude' => 50.6927, 'longitude' => 3.1746],
            ['nom' => 'Tourcoing', 'latitude' => 50.7230, 'longitude' => 3.1612],
            ['nom' => 'Montreuil', 'latitude' => 48.8638, 'longitude' => 2.4485],
            ['nom' => 'Avignon', 'latitude' => 43.9493, 'longitude' => 4.8055],
            ['nom' => 'Nanterre', 'latitude' => 48.8924, 'longitude' => 2.2068],
            ['nom' => 'Vitry-sur-Seine', 'latitude' => 48.7875, 'longitude' => 2.3929],
        ]);
    }
}
