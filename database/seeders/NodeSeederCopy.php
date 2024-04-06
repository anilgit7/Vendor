<?php

namespace Database\Seeders;

use App\Models\Node;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NodeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $nodes = [
            ['name' => 'A', 'title' => 'New Baneshwor', 'latitude' => 27.6892, 'longitude' => 85.3298],
            ['name' => 'B', 'title' => 'Koteshwor', 'latitude' => 27.6806, 'longitude' => 85.3469],
            ['name' => 'C', 'title' => 'Jadibuti', 'latitude' =>  27.6896, 'longitude' => 85.3515],
            ['name' => 'D', 'title' => 'Pepsicola', 'latitude' => 27.7016, 'longitude' => 85.3579],
            ['name' => 'E', 'title' => 'Lokanthali', 'latitude' => 27.7021, 'longitude' => 85.3657],
            ['name' => 'F', 'title' => 'Kadaghari', 'latitude' => 27.7009, 'longitude' => 85.3796],
            ['name' => 'G', 'title' => 'Gothatar', 'latitude' => 27.6872, 'longitude' => 85.3625],
        ]; 

        Node::insert($nodes);
    }
}