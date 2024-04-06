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
            ['name' => 'A', 'title' => 'New Baneshwor', 'latitude' => 27.688041, 'longitude' => 85.335630],
            ['name' => 'A', 'title' => 'Sankhamul', 'latitude' => 27.681269, 'longitude' => 85.331963],
            ['name' => 'A', 'title' => 'Mangalbazar', 'latitude' => 27.679482, 'longitude' => 85.329354],
            ['name' => 'B', 'title' => 'Babarmahal', 'latitude' => 27.692496, 'longitude' => 85.324827],
            ['name' => 'B', 'title' => 'Bijulibazar', 'latitude' => 27.690005, 'longitude' => 85.328612],
            ['name' => 'B', 'title' => 'Alphabeta', 'latitude' => 27.688924, 'longitude' => 85.331658],
             
            ['name' => 'B', 'title' => 'Tinkune', 'latitude' => 27.685710, 'longitude' => 85.346388],
            ['name' => 'C', 'title' => 'Koteshwor', 'latitude' => 27.679001, 'longitude' => 85.349374],
            ['name' => 'C', 'title' => 'Balkumari Pul', 'latitude' => 27.673604, 'longitude' => 85.342603],
            ['name' => 'C', 'title' => 'Balkumari', 'latitude' => 27.670090, 'longitude' => 85.338433],
            ['name' => 'C', 'title' => 'Bhol Dhoka', 'latitude' => 27.673102, 'longitude' => 85.332208],
            ['name' => 'C', 'title' => 'Patan DS', 'latitude' => 27.674703, 'longitude' => 85.325657],
            ['name' => 'C', 'title' => 'Patan Dhoka', 'latitude' => 27.678737, 'longitude' => 85.320945],
            ['name' => 'C', 'title' => 'Pulchowk', 'latitude' => 27.676778, 'longitude' => 85.316473],
            ['name' => 'C', 'title' => 'Chakupat', 'latitude' => 27.684871, 'longitude' => 85.318719],
            ['name' => 'C', 'title' => 'Kupandol', 'latitude' => 27.688287, 'longitude' => 85.315730],
            ['name' => 'C', 'title' => 'Tripuramarga', 'latitude' => 27.690779, 'longitude' => 85.317420],
            ['name' => 'C', 'title' => 'Maitighar', 'latitude' => 27.694282, 'longitude' => 85.319754],
             
            ['name' => 'C', 'title' => 'Gwarko', 'latitude' => 27.666433, 'longitude' => 85.332274],
            ['name' => 'C', 'title' => 'Satdobato', 'latitude' => 27.658426, 'longitude' => 85.324676],
            ['name' => 'C', 'title' => 'Chapagaundobato', 'latitude' => 27.657568, 'longitude' => 85.322646],
            ['name' => 'C', 'title' => 'Mahalaxmisthan', 'latitude' => 27.661580, 'longitude' => 85.317471],
            ['name' => 'C', 'title' => 'Kusunti', 'latitude' => 27.664906, 'longitude' => 85.313192],
            ['name' => 'C', 'title' => 'Nakhkhu', 'latitude' => 27.666600, 'longitude' => 85.308006],
            
            ['name' => 'C', 'title' => 'Lagankhel', 'latitude' => 27.666639, 'longitude' => 85.323477],
            ['name' => 'C', 'title' => 'Prayag Pokhari', 'latitude' => 27.668342, 'longitude' => 85.325090],
            ['name' => 'C', 'title' => 'Sincha', 'latitude' => 27.667305, 'longitude' => 85.330230],
            ['name' => 'C', 'title' => 'Patan Hospital', 'latitude' => 27.668074, 'longitude' => 85.321527],
            ['name' => 'C', 'title' => 'Kumaripati', 'latitude' => 27.669669, 'longitude' => 85.322088],
            ['name' => 'C', 'title' => 'Jawalakhel', 'latitude' => 27.672981, 'longitude' => 85.314096],
            ['name' => 'C', 'title' => 'Ekantakuna', 'latitude' => 27.669754, 'longitude' => 85.310850],
             
            ['name' => 'C', 'title' => 'Laligurans', 'latitude' => 27.668459, 'longitude' => 85.349430],
            ['name' => 'C', 'title' => 'Mahalaxmi', 'latitude' => 27.667652, 'longitude' => 85.349164],
            ['name' => 'C', 'title' => 'Tikathali', 'latitude' => 27.667150, 'longitude' => 85.353295],
            ['name' => 'C', 'title' => 'Radhakrishna', 'latitude' => 27.665540, 'longitude' => 85.355763],
            ['name' => 'C', 'title' => 'Kharibot', 'latitude' => 27.664817, 'longitude' => 85.359119],
            ['name' => 'C', 'title' => 'Godawori River', 'latitude' => 27.664208, 'longitude' => 85.363265],
            ['name' => 'C', 'title' => 'Anantalingeshwar', 'latitude' => 27.662547, 'longitude' => 85.367804],
            ['name' => 'C', 'title' => 'Balkot Chowk', 'latitude' => 27.665948, 'longitude' => 85.366460],
            ['name' => 'C', 'title' => 'Redcross Chowk', 'latitude' => 27.669490, 'longitude' => 85.365914],
             
            ['name' => 'D', 'title' => 'Jadibuti', 'latitude' =>  27.675120, 'longitude' => 85.352063],
            ['name' => 'E', 'title' => 'Pepsicola', 'latitude' => 27.689183, 'longitude' => 85.360791],
            ['name' => 'F', 'title' => 'Lokanthali', 'latitude' => 27.674608, 'longitude' => 85.360525],
            ['name' => 'G', 'title' => 'Kausaltar', 'latitude' => 27.674209, 'longitude' => 85.365494],
            ['name' => 'H', 'title' => 'Gatthaghar', 'latitude' => 27.674345, 'longitude' => 85.373964],
            ['name' => 'I', 'title' => 'Naya Thimi', 'latitude' => 27.673174, 'longitude' => 85.385452],
            ['name' => 'J', 'title' => 'Radhe Radhe', 'latitude' => 27.674321, 'longitude' => 85.397291],
            ['name' => 'K', 'title' => 'Sallaghari', 'latitude' => 27.672395, 'longitude' => 85.407767],
            ['name' => 'L', 'title' => 'Suryabinayak', 'latitude' => 27.665471, 'longitude' => 85.424229],
            
            ['name' => 'M', 'title' => 'Khahare Chowk', 'latitude' => 27.696435, 'longitude' => 85.366234],
            ['name' => 'M', 'title' => 'Mantar', 'latitude' => 27.705902, 'longitude' => 85.370739],
            ['name' => 'N', 'title' => 'Kadaghari', 'latitude' => 27.697726, 'longitude' => 85.371774],
            ['name' => 'O', 'title' => 'Gothatar', 'latitude' => 27.701133, 'longitude' => 85.379180],
            ['name' => 'P', 'title' => 'Tej Binayek', 'latitude' => 27.706910, 'longitude' => 85.378874],
            ['name' => 'T', 'title' => 'Chapabot', 'latitude' => 27.707639, 'longitude' => 85.383083],
            ['name' => 'U', 'title' => 'Bhaimal', 'latitude' => 27.708523, 'longitude' => 85.388647],
            ['name' => 'Q', 'title' => 'Thapagoan', 'latitude' => 27.700882, 'longitude' => 85.385171],
            ['name' => 'R', 'title' => 'Mulpani', 'latitude' => 27.703856, 'longitude' => 85.390515],
            ['name' => 'S', 'title' => 'Pipalbot', 'latitude' => 27.706312, 'longitude' => 85.394008],

            ['name' => 'V', 'title' => 'NOC', 'latitude' => 27.682653, 'longitude' => 85.370070],
            ['name' => 'W', 'title' => 'Sanothimi Ground', 'latitude' => 27.681853, 'longitude' => 85.377238],
            ['name' => 'X', 'title' => 'Madhyapur Thimi', 'latitude' => 27.682830, 'longitude' => 85.387610],
            ['name' => 'Y', 'title' => 'Bode', 'latitude' => 27.690199, 'longitude' => 85.391082],

        ];

        Node::insert($nodes);
    }
}