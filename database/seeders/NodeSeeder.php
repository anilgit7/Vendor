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

            ['name' => 'B', 'title' => 'Tinkune', 'latitude' => 27.685367, 'longitude' => 85.349132],
            ['name' => 'C', 'title' => 'Koteshwor', 'latitude' => 27.679001, 'longitude' => 85.349374],
            ['name' => 'C', 'title' => 'Balkumari Pul', 'latitude' => 27.673604, 'longitude' => 85.342603],
            ['name' => 'C', 'title' => 'Balkumari', 'latitude' => 27.670090, 'longitude' => 85.338433],
            ['name' => 'C', 'title' => 'Bhol Dhoka', 'latitude' => 27.673102, 'longitude' => 85.332208],
            ['name' => 'C', 'title' => 'Patan DS', 'latitude' => 27.674703, 'longitude' => 85.325657],
            ['name' => 'C', 'title' => 'Patan Dhoka', 'latitude' => 27.678737, 'longitude' => 85.320945],
            ['name' => 'C', 'title' => 'Pulchowk', 'latitude' => 27.676778, 'longitude' => 85.316473],
            ['name' => 'C', 'title' => 'Labim', 'latitude' => 27.676035, 'longitude' => 85.318144],
            ['name' => 'C', 'title' => 'Lakayu', 'latitude' => 27.673092, 'longitude' => 85.324344],
            ['name' => 'C', 'title' => 'Chakupat', 'latitude' => 27.684871, 'longitude' => 85.318719],
            ['name' => 'C', 'title' => 'Kupandol', 'latitude' => 27.688908, 'longitude' => 85.316113],
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
             
            ['name' => 'C', 'title' => 'CCRC', 'latitude' => 27.671407, 'longitude' => 85.344999],
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
            // ['name' => 'E', 'title' => 'Pepsicola', 'latitude' => 27.689183, 'longitude' => 85.360791],
            ['name' => 'F', 'title' => 'Lokanthali', 'latitude' => 27.674608, 'longitude' => 85.360525],
            ['name' => 'G', 'title' => 'Kausaltar', 'latitude' => 27.674209, 'longitude' => 85.365494],
            ['name' => 'H', 'title' => 'Gatthaghar', 'latitude' => 27.674345, 'longitude' => 85.373964],
            ['name' => 'I', 'title' => 'Naya Thimi', 'latitude' => 27.673174, 'longitude' => 85.385452],
            ['name' => 'J', 'title' => 'Radhe Radhe', 'latitude' => 27.674321, 'longitude' => 85.397291],
            ['name' => 'K', 'title' => 'Sallaghari', 'latitude' => 27.672395, 'longitude' => 85.407767],
            ['name' => 'L', 'title' => 'Suryabinayak', 'latitude' => 27.665471, 'longitude' => 85.424229],
            

            ['name' => 'V', 'title' => 'NOC', 'latitude' => 27.682653, 'longitude' => 85.370070],
            ['name' => 'W', 'title' => 'Sanothimi Ground', 'latitude' => 27.681853, 'longitude' => 85.377238],
            ['name' => 'X', 'title' => 'Madhyapur Thimi', 'latitude' => 27.682830, 'longitude' => 85.387610],
            ['name' => 'Y', 'title' => 'Bode', 'latitude' => 27.690199, 'longitude' => 85.391082],


            //new
            ['name' => 'A', 'title' => 'Megha Hospital', 'latitude' => 27.674698, 'longitude' => 85.301982],
            ['name' => 'A', 'title' => 'Dhobighat', 'latitude' => 27.678476, 'longitude' => 85.302195],
            ['name' => 'B', 'title' => 'Jhamsikhel', 'latitude' => 27.684199, 'longitude' => 85.302231],
            ['name' => 'B', 'title' => 'Balkhu Pul', 'latitude' => 27.684577, 'longitude' => 85.300050],
            ['name' => 'B', 'title' => 'Balkhu', 'latitude' => 27.684833, 'longitude' => 85.298084],
            ['name' => 'B', 'title' => 'TU COE', 'latitude' => 27.685502, 'longitude' => 85.293305],
            ['name' => 'B', 'title' => 'Gaurisakar', 'latitude' => 27.687909, 'longitude' => 85.290071],
            ['name' => 'B', 'title' => 'Sunargaon', 'latitude' => 27.688391, 'longitude' => 85.286399],
            ['name' => 'B', 'title' => 'Amritnagar', 'latitude' => 27.689030, 'longitude' => 85.284268],
            ['name' => 'B', 'title' => 'Bhatbhatini', 'latitude' => 27.691365, 'longitude' => 85.282733],
            
            ['name' => 'A', 'title' => 'Dhamkal', 'latitude' => 27.678479, 'longitude' => 85.305728],
            ['name' => 'B', 'title' => 'St. Mary', 'latitude' => 27.676075, 'longitude' => 85.312526],
            ['name' => 'B', 'title' => 'Yapa', 'latitude' => 27.675710, 'longitude' => 85.315524],
            ['name' => 'B', 'title' => 'Sikali', 'latitude' => 27.682667, 'longitude' => 85.306423],
            ['name' => 'B', 'title' => 'Sanepa', 'latitude' => 27.685198, 'longitude' => 85.307208],
            ['name' => 'B', 'title' => 'Sankata', 'latitude' => 27.688562, 'longitude' => 85.308994],
            ['name' => 'B', 'title' => 'Bhyuti', 'latitude' => 27.680710, 'longitude' => 85.310307],
            ['name' => 'B', 'title' => 'Bakhundol', 'latitude' => 27.683981, 'longitude' => 85.312149],
            ['name' => 'B', 'title' => 'Teen Khamba', 'latitude' => 27.689714, 'longitude' => 85.314831],
            ['name' => 'B', 'title' => 'Rajtirtha', 'latitude' => 27.692304, 'longitude' => 85.304449],
            ['name' => 'B', 'title' => 'Sanchal', 'latitude' => 27.691147, 'longitude' => 85.302551],
            ['name' => 'B', 'title' => 'Gusingal', 'latitude' => 27.691529, 'longitude' => 85.310093],

            // ['name' => 'B', 'title' => 'Link', 'latitude' => 27.691023, 'longitude' => 85.287864],
            // ['name' => 'B', 'title' => 'Godar', 'latitude' => 27.692199, 'longitude' => 85.288783],
            // ['name' => 'B', 'title' => 'SKE', 'latitude' => 27.693833, 'longitude' => 85.291078],
            ['name' => 'B', 'title' => 'Kitabkalam', 'latitude' => 27.688049, 'longitude' => 85.298196],
            ['name' => 'B', 'title' => 'Leak', 'latitude' => 27.689769, 'longitude' => 85.299435],
            ['name' => 'B', 'title' => 'M8R2', 'latitude' => 27.692064, 'longitude' => 85.300893],
            ['name' => 'B', 'title' => 'Teku Dovan', 'latitude' => 27.693640, 'longitude' => 85.302008],
            ['name' => 'B', 'title' => 'Sahid Sukra', 'latitude' => 27.694102, 'longitude' => 85.304189],
            ['name' => 'B', 'title' => 'Panchali', 'latitude' => 27.695454, 'longitude' => 85.304525],
            // ['name' => 'B', 'title' => 'Kuleshwor', 'latitude' => 27.693238, 'longitude' => 85.298343],

            ['name' => 'B', 'title' => 'Tripureshwor', 'latitude' => 27.693901, 'longitude' => 85.314087],
            ['name' => 'B', 'title' => 'DOP', 'latitude' => 27.694258, 'longitude' => 85.312138],
            ['name' => 'B', 'title' => 'Teku', 'latitude' => 27.696770, 'longitude' => 85.305232],
            ['name' => 'B', 'title' => 'Ganeshman', 'latitude' => 27.698490, 'longitude' => 85.299360],
            ['name' => 'B', 'title' => 'Soltee Mode', 'latitude' => 27.696594, 'longitude' => 85.293623],
            ['name' => 'B', 'title' => 'Ravi Bhavan', 'latitude' => 27.695491, 'longitude' => 85.292459],
            ['name' => 'B', 'title' => 'Puspalal', 'latitude' => 27.695706, 'longitude' => 85.290704],
            ['name' => 'B', 'title' => 'Kalanki Mandir', 'latitude' => 27.694387, 'longitude' => 85.285568],
            ['name' => 'B', 'title' => 'Kalanki', 'latitude' => 27.693353, 'longitude' => 85.281638],

        ];

        Node::insert($nodes);
    }
}