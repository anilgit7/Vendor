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
            ['name' => 'A1', 'title' => 'Tripuramarga - Tripureshwor', 'lat1' => 27.690779, 'lng1' => 85.317420, 'lat2' => 27.693901, 'lng2' => 85.314087],

            ['name' => 'A1', 'title' => 'DOP - Tripureshwor', 'lat1' => 27.694258, 'lng1' => 85.312138, 'lat2' => 27.693901, 'lng2' => 85.314087],

            ['name' => 'A1', 'title' => 'DOP - Teku', 'lat1' => 27.694258, 'lng1' => 85.312138, 'lat2' => 27.696770, 'lng2' => 85.305232],

            ['name' => 'A1', 'title' => 'Ganeshman - Teku', 'lat1' => 27.698490, 'lng1' => 85.299360, 'lat2' => 27.696770, 'lng2' => 85.305232],

            ['name' => 'A1', 'title' => 'Ganeshman - Soltee Mode', 'lat1' => 27.698490, 'lng1' => 85.299360, 'lat2' => 27.696594, 'lng2' => 85.293623],

            ['name' => 'A1', 'title' => 'Ravi Bhavan - Soltee Mode', 'lat1' => 27.695491, 'lng1' => 85.292459, 'lat2' => 27.696594, 'lng2' => 85.293623],

            ['name' => 'A1', 'title' => 'Ravi Bhavan - Puspalal', 'lat1' => 27.695491, 'lng1' => 85.292459, 'lat2' => 27.695706, 'lng2' => 85.290704],

            ['name' => 'A1', 'title' => 'Kalanki Mandhir - Puspalal', 'lat1' => 27.694387, 'lng2' => 85.285568, 'lat2' => 27.695706, 'lng2' => 85.290704],

            ['name' => 'A1', 'title' => 'Kalanki Mandhir - Kalanki', 'lat1' => 27.694387, 'lng2' => 85.285568, 'lat2' => 27.693353, 'lng2' => 85.281638],


            
            ['name' => 'H2', 'title' => 'Ekantakuna - Megha Hospital', 'lat1' => 27.669754, 'lng1' => 85.310850, 'lat2' => 27.674698, 'lng2' => 85.301982],

            ['name' => 'H2', 'title' => 'Dhobighat - Megha Hospital', 'lat1' => 27.678476, 'lng1' => 85.302195, 'lat2' => 27.674698, 'lng2' => 85.301982],
            
            ['name' => 'H2', 'title' => 'Dhobighat - Jhamsikhel', 'lat1' => 27.678476, 'lng1' => 85.302195, 'lat2' => 27.684199, 'lng2' => 85.302231],
            
            ['name' => 'H2', 'title' => 'Jhamsikhel - Balkhu Pul', 'lat1' => 27.684199, 'lng1' => 85.302231, 'lat2' => 27.684577, 'lng2' => 85.300050],
            
            ['name' => 'H2', 'title' => 'Balkhu - Balkhu Pul', 'lat1' => 27.684833, 'lng1' => 85.298084, 'lat2' => 27.684577, 'lng2' => 85.300050],
            
            ['name' => 'H2', 'title' => 'Balkhu - TU COE', 'lat1' => 27.684833, 'lng1' => 85.298084, 'lat2' => 27.685502, 'lng2' => 85.293305],
            
            ['name' => 'H2', 'title' => 'Gaurisakar - TU COE', 'lat1' => 27.687909, 'lng1' => 85.290071, 'lat2' => 27.685502, 'lng2' => 85.293305],
            
            ['name' => 'H2', 'title' => 'Gaurisakar - Sunargaon', 'lat1' => 27.687909, 'lng1' => 85.290071, 'lat2' => 27.688391, 'lng2' => 85.286399],
            
            ['name' => 'H2', 'title' => 'Amritnagar - Sunargaon', 'lat1' => 27.689030, 'lng1' => 85.284268, 'lat2' => 27.688391, 'lng2' => 85.286399],
            
            ['name' => 'H2', 'title' => 'Amritnagar - Bhatbhatini', 'lat1' => 27.689030, 'lng1' => 85.284268, 'lat2' => 27.691365, 'lng2' => 85.282733],
            
            ['name' => 'H2', 'title' => 'Kalanki - Bhatbhatini', 'lat1' => 27.693353, 'lng1' => 85.281638, 'lat2' => 27.691365, 'lng2' => 85.282733],
            
            
            
            ['name' => 'H2', 'title' => 'Dhobighat - Dhamkal', 'lat1' => 27.678476, 'lng1' => 85.302195, 'lat2' => 27.678479, 'lng2' => 85.305728],
            
            ['name' => 'H2', 'title' => 'Dhamkal - St. Mary', 'lat1' => 27.678479, 'lng1' => 85.305728, 'lat2' => 27.676075, 'lng2' => 85.312526],
            
            ['name' => 'H2', 'title' => 'Yapa - St. Mary', 'lat1' => 27.675710, 'lng1' => 85.315524, 'lat2' => 27.676075, 'lng2' => 85.312526],
            
            ['name' => 'H2', 'title' => 'Jhamsikhel - Sikali', 'lat1' => 27.684199, 'lng1' => 85.302231, 'lat2' => 27.682667, 'lng2' => 85.306423],
            
            ['name' => 'H2', 'title' => 'Bhyuti - Sikali', 'lat1' => 27.680710, 'lng1' => 85.310307, 'lat2' => 27.682667, 'lng2' => 85.306423],
            
            ['name' => 'H2', 'title' => 'Bhyuti - Bakhundol', 'lat1' => 27.680710, 'lng1' => 85.310307, 'lat2' => 27.683981, 'lng2' => 85.312149],
            
            ['name' => 'H2', 'title' => 'Teen Khamba - Bakhundol', 'lat1' => 27.689714, 'lng1' => 85.314831, 'lat2' => 27.683981, 'lng2' => 85.312149],
            
            ['name' => 'H2', 'title' => 'Teen Khamba - Gusingal', 'lat1' => 27.689714, 'lng1' => 85.314831, 'lat2' => 27.691529, 'lng2' => 85.310093],
            
            ['name' => 'H2', 'title' => 'Teen Khamba - Kupandol', 'lat1' => 27.689714, 'lng1' => 85.314831, 'lat2' => 27.688908, 'lng2' => 85.316113],
            
            ['name' => 'H2', 'title' => 'Gusingal - Rajtirtha', 'lat1' => 27.691529, 'lng1' => 85.310093, 'lat2' => 27.692304, 'lng2' => 85.304449],
            
            ['name' => 'H2', 'title' => 'Sanepa - Sikali', 'lat1' => 27.685198, 'lng1' => 85.307208, 'lat2' => 27.682667, 'lng2' => 85.306423],

            ['name' => 'H2', 'title' => 'Sanepa - Sankata', 'lat1' => 27.685198, 'lng1' => 85.307208, 'lat2' => 27.688562, 'lng2' => 85.308994],
            
            ['name' => 'H2', 'title' => 'Sanepa - Rajtirtha', 'lat1' => 27.685198, 'lng1' => 85.307208, 'lat2' => 27.692304, 'lng2' => 85.304449],
            
            ['name' => 'H2', 'title' => 'Sanchal - Rajtirtha', 'lat1' =>  27.691147, 'lng1' => 85.302551, 'lat2' => 27.692304, 'lng2' => 85.304449],
            
            ['name' => 'H2', 'title' => 'Sanchal - Balkhu Pul', 'lat1' =>  27.691147, 'lng1' => 85.302551, 'lat2' => 27.684577, 'lng2' => 85.300050],
            
            
            
            ['name' => 'H2', 'title' => 'Balkhu - Kitabkalam', 'lat1' => 27.684833, 'lng1' => 85.298084, 'lat2' => 27.688049, 'lng2' => 85.298196],

            ['name' => 'H2', 'title' => 'Leak - Kitabkalam', 'lat1' => 27.689769, 'lng1' => 85.299435, 'lat2' => 27.688049, 'lng2' => 85.298196],

            ['name' => 'H2', 'title' => 'Leak - M8R2', 'lat1' => 27.689769, 'lng1' => 85.299435, 'lat2' => 27.692064, 'lng2' => 85.300893],

            ['name' => 'H2', 'title' => 'Leak - Kuleshwor', 'lat1' => 27.689769, 'lng1' => 85.299435, 'lat2' =>  27.693238, 'lng2' => 85.298343],

            ['name' => 'H2', 'title' => 'Ganeshman - Kuleshwor', 'lat1' => 27.698490, 'lng1' => 85.299360, 'lat2' =>  27.693238, 'lng2' => 85.298343],

            ['name' => 'H2', 'title' => 'Sanchal - M8R2', 'lat1' => 27.691147, 'lng1' => 85.302551, 'lat2' => 27.692064, 'lng2' => 85.300893],

            ['name' => 'H2', 'title' => 'Teku Dovan - M8R2', 'lat1' => 27.693640, 'lng1' => 85.302008, 'lat2' => 27.692064, 'lng2' => 85.300893],

            ['name' => 'H2', 'title' => 'Teku Dovan - Sahid Sukra', 'lat1' => 27.693640, 'lng1' => 85.302008, 'lat2' => 27.694102, 'lng2' => 85.304189],

            ['name' => 'H2', 'title' => 'Rajtirtha - Sahid Sukra', 'lat1' => 27.692304, 'lng1' => 85.304449, 'lat2' => 27.694102, 'lng2' => 85.304189],

            ['name' => 'H2', 'title' => 'Panchali - Sahid Sukra', 'lat1' => 27.695454, 'lng1' => 85.304525, 'lat2' => 27.694102, 'lng2' => 85.304189],

            ['name' => 'H2', 'title' => 'Panchali - Teku', 'lat1' => 27.695454, 'lng1' => 85.304525, 'lat2' => 27.696770, 'lng2' => 85.305232],



            ['name' => 'H2', 'title' => 'Link - Bhatbhatini', 'lat1' => 27.691023, 'lng1' => 85.287864, 'lat2' => 27.691365, 'lng2' => 85.282733],

            ['name' => 'H2', 'title' => 'Link - Sunargaon', 'lat1' => 27.691023, 'lng1' => 85.287864, 'lat2' => 27.688391, 'lng2' => 85.286399],

            ['name' => 'H2', 'title' => 'Link - Godar', 'lat1' => 27.691023, 'lng1' => 85.287864, 'lat2' => 27.692199, 'lng2' => 85.288783],

            ['name' => 'H2', 'title' => 'SKE - Godar', 'lat1' => 27.693833, 'lng1' => 85.291078, 'lat2' => 27.692199, 'lng2' => 85.288783],

            ['name' => 'H2', 'title' => 'SKE - Ravi Bhavan', 'lat1' => 27.693833, 'lng1' => 85.291078, 'lat2' => 27.695491, 'lng2' => 85.292459],



            // ['name' => 'B1', 'title' => 'Tinkune - Sinamangal', 'lat1' => 27.685367, 'lng1' => 85.349132, 'lat2' => 27.696090, 'lng2' => 85.355328],
            // ['name' => 'B1', 'title' => 'Sinamangal - Tinkune', 'lat1' => 27.696090, 'lng1' => 85.355328, 'lat2' => 27.685367, 'lng2' => 85.349132],

            // ['name' => 'B1', 'title' => 'Sinamangal - Airport', 'lat1' => 27.696090, 'lng1' => 85.355328, 'lat2' => 27.698855, 'lng2' => 85.354994],
            // ['name' => 'B1', 'title' => 'Airport - Sinamangal', 'lat1' => 27.698855, 'lng1' => 85.354994, 'lat2' => 27.696090, 'lng2' => 85.355328],

            // ['name' => 'B1', 'title' => 'Airport - Aircargo', 'lat1' => 27.698855, 'lng1' => 85.354994, 'lat2' => 27.703063, 'lng2' => 85.352205],
            // ['name' => 'B1', 'title' => 'Aircargo - Airport', 'lat1' => 27.703063, 'lng1' => 85.352205, 'lat2' => 27.698855, 'lng2' => 85.354994],

            // ['name' => 'B1', 'title' => 'Aircargo - Tilganga', 'lat1' => 27.703063, 'lng1' => 85.352205, 'lat2' => 27.706277, 'lng2' => 85.351081],
            // ['name' => 'B1', 'title' => 'Tilganga - Aircargo', 'lat1' => 27.706277, 'lng1' => 85.351081, 'lat2' => 27.703063, 'lng2' => 85.352205],

            // ['name' => 'B1', 'title' => 'Tilganga - Pashupatinath', 'lat1' => 27.706277, 'lng1' => 85.351081, 'lat2' => 27.705665, 'lng2' => 85.346696],
            // ['name' => 'B1', 'title' => 'Pashupatinath - Tilganga', 'lat1' => 27.705665, 'lng1' => 85.346696, 'lat2' => 27.706277, 'lng2' => 85.351081],

            // ['name' => 'B1', 'title' => 'Pashupatinath - Gousala', 'lat1' => 27.705665, 'lng1' => 85.346696, 'lat2' => 27.707869, 'lng2' => 85.343355],
            // ['name' => 'B1', 'title' => 'Gousala - Pashupatinath', 'lat1' => 27.707869, 'lng1' => 85.343355, 'lat2' => 27.705665, 'lng2' => 85.346696],

            // ['name' => 'B1', 'title' => 'Gousala - Mitrapark', 'lat1' => 27.707869, 'lng1' => 85.343355, 'lat2' => 27.712990, 'lng2' => 85.345368],
            // ['name' => 'B1', 'title' => 'Mitrapark - Gousala', 'lat1' => 27.712990, 'lng1' => 85.345368, 'lat2' => 27.707869, 'lng2' => 85.343355],

            // ['name' => 'B1', 'title' => 'Mitrapark - Chabel', 'lat1' => 27.712990, 'lng1' => 85.345368, 'lat2' => 27.717015, 'lng2' => 85.346520],
            // ['name' => 'B1', 'title' => 'Chabel - Mitrapark', 'lat1' => 27.717015, 'lng1' => 85.346520, 'lat2' => 27.712990, 'lng2' => 85.345368],

            // ['name' => 'B1', 'title' => 'Chabel - KL Tower', 'lat1' => 27.717015, 'lng1' => 85.346520, 'lat2' => 27.719080, 'lng2' => 85.350362],
            // ['name' => 'B1', 'title' => 'KL Tower - Chabel', 'lat1' => 27.719080, 'lng1' => 85.350362, 'lat2' => 27.717015, 'lng2' => 85.346520],

            // ['name' => 'B1', 'title' => 'KL Tower - Hayet', 'lat1' => 27.719080, 'lng1' => 85.350362, 'lat2' => 27.719531, 'lng2' => 85.354544],
            // ['name' => 'B1', 'title' => 'Hayet - KL Tower', 'lat1' => 27.719531, 'lng1' => 85.354544, 'lat2' => 27.719080, 'lng2' => 85.350362],

            // ['name' => 'B1', 'title' => 'Hayet - Boudhha', 'lat1' => 27.719531, 'lng1' => 85.354544, 'lat2' => 27.720739, 'lng2' => 85.361404],
            // ['name' => 'B1', 'title' => 'Boudhha - Hayet', 'lat1' => 27.720739, 'lng1' => 85.361404, 'lat2' => 27.719531, 'lng2' => 85.354544],

            // ['name' => 'B1', 'title' => 'Boudhha - Gaucharan', 'lat1' => 27.720739, 'lng1' => 85.361404, 'lat2' => 27.720477, 'lng2' => 85.364986],
            // ['name' => 'B1', 'title' => 'Gaucharan - Boudhha', 'lat1' => 27.720477, 'lng1' => 85.364986, 'lat2' => 27.720739, 'lng2' => 85.361404],

            // ['name' => 'B1', 'title' => 'Gaucharan - Jorpati', 'lat1' => 27.720477, 'lng1' => 85.364986, 'lat2' => 27.718649, 'lng2' => 85.370542],
            // ['name' => 'B1', 'title' => 'Jorpati - Gaucharan', 'lat1' => 27.718649, 'lng1' => 85.370542, 'lat2' => 27.720477, 'lng2' => 85.364986],

            // ['name' => 'B1', 'title' => 'Jorpati - Nayabasti', 'lat1' => 27.718649, 'lng1' => 85.370542, 'lat2' => 27.714507, 'lng2' => 85.371005],
            // ['name' => 'B1', 'title' => 'Nayabasti - Jorpati', 'lat1' => 27.714507, 'lng1' => 85.371005, 'lat2' => 27.718649, 'lng2' => 85.370542],

            // ['name' => 'B1', 'title' => 'Nayabasti - Sanodol', 'lat1' => 27.714507, 'lng1' => 85.371005, 'lat2' => 27.710192, 'lng2' => 85.374246],
            // ['name' => 'B1', 'title' => 'Sanodol - Nayabasti', 'lat1' => 27.710192, 'lng1' => 85.374246, 'lat2' => 27.714507, 'lng2' => 85.371005],

            // ['name' => 'B1', 'title' => 'Sanodol - Madanashrit', 'lat1' => 27.710192, 'lng1' => 85.374246, 'lat2' => 27.710618, 'lng2' => 85.376942],
            // ['name' => 'B1', 'title' => 'Madanashrit - Sanodol', 'lat1' => 27.710618, 'lng1' => 85.376942, 'lat2' => 27.710192, 'lng2' => 85.374246],

            // ['name' => 'B1', 'title' => 'Madanashrit - Tej Binayek', 'lat1' => 27.710618, 'lng1' => 85.376942, 'lat2' => 27.706910, 'lng2' => 85.378874],
            // ['name' => 'B1', 'title' => 'Tej Binayek - Madanashrit', 'lat1' => 27.706910, 'lng1' => 85.378874, 'lat2' => 27.710618, 'lng2' => 85.376942],
            
            
        ];
        Edge::insert($edges);
    }
}
