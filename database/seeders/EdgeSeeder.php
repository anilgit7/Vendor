<?php

namespace Database\Seeders;

use App\Models\Edge;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EdgeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $edges = [
            ['name' => 'A1', 'title' => 'New Baneshwor - Koteshwor', 'lat1' => 27.6892, 'lng1' => 85.3298, 'lat2' => 27.6806, 'lng2' => 85.3469],
            ['name' => 'A2', 'title' => 'Koteshwor - New Baneshwor', 'lat1' => 27.6806, 'lng1' => 85.3469, 'lat2' => 27.6892, 'lng2' => 85.3298],

            ['name' => 'B1', 'title' => 'Koteshwor - Jadibuti', 'lat1' => 27.6806, 'lng1' => 85.3469, 'lat2' => 27.6896, 'lng2' => 85.3515],
            ['name' => 'B2', 'title' => 'Jadibuti - Koteshwor', 'lat1' => 27.6896, 'lng1' => 85.3515, 'lat2' => 27.6806, 'lng2' => 85.3469],

            ['name' => 'C1', 'title' => 'Jadibuti - Pepsicola', 'lat1' => 27.6896, 'lng1' => 85.3515, 'lat2' => 27.7016, 'lng2' => 85.3579],
            ['name' => 'C2', 'title' => 'Pepsicola -Jadibuti', 'lat1' => 27.7016, 'lng1' => 85.3579, 'lat2' => 27.6896, 'lng2' => 85.3515],

            ['name' => 'D1', 'title' => 'Jadibuti - Lokanthali', 'lat1' => 27.6896, 'lng1' => 85.3515, 'lat2' => 27.7021, 'lng2' => 85.3657],
            ['name' => 'D2', 'title' => 'Lokanthali - Jadibuti', 'lat1' => 27.7021, 'lng1' => 85.3657, 'lat2' => 27.6896, 'lng2' => 85.3515],

            ['name' => 'E1', 'title' => 'Lokanthali - Pepsicola', 'lat1' => 27.7021, 'lng1' => 85.3657, 'lat2' => 27.7016, 'lng2' => 85.3579],
            ['name' => 'E2', 'title' => 'Pepsicola - Lokanthali', 'lat1' => 27.7016, 'lng1' => 85.3579, 'lat2' => 27.7021, 'lng2' => 85.3657],

            ['name' => 'F1', 'title' => 'Pepsicola - Kadaghari', 'lat1' => 27.7016, 'lng1' => 85.3579, 'lat2' => 27.7009, 'lng2' => 85.3796],
            ['name' => 'F1', 'title' => 'Kadaghari - Pepsicola', 'lat1' => 27.7009, 'lng1' => 85.3796, 'lat2' => 27.7016, 'lng2' => 85.3579],

            ['name' => 'G1', 'title' => 'Pepsicola - Gothatar', 'lat1' => 27.7016, 'lng1' => 85.3579, 'lat2' => 27.6872, 'lng2' => 85.3625],
            ['name' => 'G2', 'title' => 'Gothatar - Pepsicola', 'lat1' => 27.6872, 'lng1' => 85.3625, 'lat2' => 27.7016, 'lng2' => 85.3579],

            ['name' => 'H1', 'title' => 'Kadaghari - Gothatar', 'lat1' => 27.7009, 'lng1' => 85.3796, 'lat2' => 27.6872, 'lng2' => 85.3625],
            ['name' => 'H2', 'title' => 'Gothatar - Kadaghari', 'lat1' => 27.6872, 'lng1' => 85.3625, 'lat2' => 27.7009, 'lng2' => 85.3796],
        ];
        Edge::insert($edges);
    }
}
