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
            
            // ['name' => 'C', 'title' => 'Sinamangal', 'latitude' => 27.696090, 'longitude' => 85.355328],
            // ['name' => 'C', 'title' => 'Airport', 'latitude' => 27.698855, 'longitude' => 85.354994],
            // ['name' => 'C', 'title' => 'Aircargo', 'latitude' => 27.703063, 'longitude' => 85.352205],
            // ['name' => 'C', 'title' => 'Tilganga', 'latitude' => 27.706277, 'longitude' => 85.351081],
            // ['name' => 'C', 'title' => 'Pashupatinath', 'latitude' => 27.705665, 'longitude' => 85.346696],
            // ['name' => 'C', 'title' => 'Gousala', 'latitude' => 27.707869, 'longitude' => 85.343355],
            // ['name' => 'C', 'title' => 'Mitrapark', 'latitude' => 27.712990, 'longitude' => 85.345368],
            // ['name' => 'C', 'title' => 'Chabel', 'latitude' => 27.717015, 'longitude' => 85.346520],
            // ['name' => 'C', 'title' => 'KL Tower', 'latitude' => 27.719080, 'longitude' => 85.350362],
            // ['name' => 'C', 'title' => 'Hayet', 'latitude' => 27.719531, 'longitude' => 85.354544],
            // ['name' => 'C', 'title' => 'Boudhha', 'latitude' => 27.720739, 'longitude' => 85.361404],
            // ['name' => 'C', 'title' => 'Gaucharan', 'latitude' => 27.720477, 'longitude' => 85.364986],
            // ['name' => 'C', 'title' => 'Jorpati', 'latitude' => 27.718649, 'longitude' => 85.370542],
            // ['name' => 'C', 'title' => 'Nayabasti', 'latitude' => 27.714507, 'longitude' => 85.371005],
            // ['name' => 'C', 'title' => 'Sanodol', 'latitude' => 27.710192, 'longitude' => 85.374246],
            // ['name' => 'C', 'title' => 'Madanashrit', 'latitude' => 27.710618, 'longitude' => 85.376942],

        ]; 

        Node::insert($nodes);
    }
}