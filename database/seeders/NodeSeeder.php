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
            ['name' => 'New Baneshwor Road', 'latitude' => 27.6914, 'longitude' => 85.3392],
            ['name' => 'Thamel Marg', 'latitude' => 27.7151, 'longitude' => 85.3129],
            ['name' => 'Ring Road', 'latitude' => 27.6926, 'longitude' => 85.3363],
            // Bhaktapur roads
            ['name' => 'Suryabinayak Marg', 'latitude' => 27.6711, 'longitude' => 85.4294],
            ['name' => 'Taumadhi Square Road', 'latitude' => 27.6723, 'longitude' => 85.4237],
            ['name' => 'Nagarkot Road', 'latitude' => 27.7172, 'longitude' => 85.5189],
            // Lalitpur roads
            ['name' => 'Patan Durbar Square Road', 'latitude' => 27.6765, 'longitude' => 85.3146],
            ['name' => 'Jawalakhel Road', 'latitude' => 27.6768, 'longitude' => 85.3159],
            ['name' => 'Pulchowk Road', 'latitude' => 27.6783, 'longitude' => 85.3182],
            ['name' => '', 'latitude' => 27.657223969792, 'longitude' => 85.32100845216],
            ['name' => '', 'latitude' => 27.661715206262, 'longitude' => 85.295869161834],
            ['name' => '', 'latitude' => 27.669099197413, 'longitude' => 85.318715855476],
            ['name' => '', 'latitude' => 27.674458520366, 'longitude' => 85.309947499319],
            ['name' => '', 'latitude' => 27.665451484012, 'longitude' => 85.296931029554],
            ['name' => '', 'latitude' => 27.672967356743, 'longitude' => 85.295495448544],
            ['name' => '', 'latitude' => 27.666088878502, 'longitude' => 85.320424527235],
            ['name' => '', 'latitude' => 27.660858736237, 'longitude' => 85.313303602975],
            ['name' => '', 'latitude' => 27.673287366343, 'longitude' => 85.314967977938],
            ['name' => '', 'latitude' => 27.657537098864, 'longitude' => 85.318048297762],
            ['name' => '', 'latitude' => 27.67382096021, 'longitude' => 85.295656440918],
            ['name' => '', 'latitude' => 27.663620536535, 'longitude' => 85.318269930721],
            ['name' => '', 'latitude' => 27.656100675554, 'longitude' => 85.318119238146],
            ['name' => '', 'latitude' => 27.660586879102, 'longitude' => 85.298972270081],
            ['name' => '', 'latitude' => 27.669632867013, 'longitude' => 85.297155606604],
            ['name' => '', 'latitude' => 27.660306422299, 'longitude' => 85.29896728768],
            ['name' => '', 'latitude' => 27.674540401808, 'longitude' => 85.295927280153],
            ['name' => '', 'latitude' => 27.667052289792, 'longitude' => 85.295630549367],
            ['name' => '', 'latitude' => 27.666106842905, 'longitude' => 85.31242024413],
            ['name' => '', 'latitude' => 27.672302457972, 'longitude' => 85.30714859022],
            ['name' => '', 'latitude' => 27.659517476018, 'longitude' => 85.316171755123],
            ['name' => '', 'latitude' => 27.660678267393, 'longitude' => 85.298589584723],
            ['name' => '', 'latitude' => 27.667164005993, 'longitude' => 85.311442573741],
            ['name' => '', 'latitude' => 27.667109982424, 'longitude' => 85.311665773822],
            ['name' => '', 'latitude' => 27.657313498703, 'longitude' => 85.313016449177],
            ['name' => '', 'latitude' => 27.665034451266, 'longitude' => 85.32064220646],
            ['name' => '', 'latitude' => 27.663222634535, 'longitude' => 85.31661031274],
            ['name' => '', 'latitude' => 27.672777087086, 'longitude' => 85.306072195833],
            ['name' => '', 'latitude' => 27.672145922579, 'longitude' => 85.324525303619],
            ['name' => '', 'latitude' => 27.667912148066, 'longitude' => 85.315735224518],
            ['name' => '', 'latitude' => 27.665440500365, 'longitude' => 85.319338245353],
            ['name' => '', 'latitude' => 27.660697524167, 'longitude' => 85.299365776075],
            ['name' => '', 'latitude' => 27.668888789292, 'longitude' => 85.3202073654],
            ['name' => '', 'latitude' => 27.662865286978, 'longitude' => 85.297012485171],
            ['name' => '', 'latitude' => 27.666796384018, 'longitude' => 85.324333350666],
            // Additional roads
            ['name' => 'Bhaktapur - Lalitpur Highway', 'latitude' => 27.6735, 'longitude' => 85.4247],
            ['name' => 'Kalanki - Bhaktapur Expressway', 'latitude' => 27.6732, 'longitude' => 85.4281],
            ['name' => 'Lalitpur - Dhulikhel Road', 'latitude' => 27.6774, 'longitude' => 85.3202],
            ['name' => 'Kathmandu Durbar Square', 'latitude' => 27.7045, 'longitude' => 85.3076],
            ['name' => 'Pashupatinath Temple', 'latitude' => 27.7100, 'longitude' => 85.3484],
            ['name' => 'Swayambhunath Stupa', 'latitude' => 27.7149, 'longitude' => 85.2918],
            ['name' => 'Boudhanath Stupa', 'latitude' => 27.7211, 'longitude' => 85.3615],
            ['name' => 'Thamel', 'latitude' => 27.7149, 'longitude' => 85.3081],
            ['name' => 'Nagarkot', 'latitude' => 27.7172, 'longitude' => 85.5189],
            ['name' => 'Bhaktapur Durbar Square', 'latitude' => 27.6723, 'longitude' => 85.4283],
            ['name' => 'Patan Durbar Square', 'latitude' => 27.6765, 'longitude' => 85.3146],
            ['name' => 'Budhanilkantha Temple', 'latitude' => 27.7693, 'longitude' => 85.3550],
            ['name' => 'Chandragiri Hill', 'latitude' => 27.6653, 'longitude' => 85.2880],
            ['name' => 'Sundarijal', 'latitude' => 27.7716, 'longitude' => 85.4549],
            ['name' => 'Kirtipur', 'latitude' => 27.6765, 'longitude' => 85.2774],
            ['name' => 'Namo Buddha', 'latitude' => 27.5844, 'longitude' => 85.5274],
            ['name' => 'Godavari', 'latitude' => 27.5832, 'longitude' => 85.3840],
            ['name' => 'Chitlang', 'latitude' => 27.5546, 'longitude' => 85.0868],
            ['name' => 'Bhimdhunga', 'latitude' => 27.7273, 'longitude' => 85.2651],
            ['name' => 'Tokha', 'latitude' => 27.7722, 'longitude' => 85.3369],
            ['name' => 'Dakshinkali', 'latitude' => 27.5986, 'longitude' => 85.2580],
            ['name' => 'Gokarna', 'latitude' => 27.7416, 'longitude' => 85.3994],
            ['name' => 'Dhulikhel', 'latitude' => 27.6196, 'longitude' => 85.5561],
            // Add more nodes as needed
        ];

        Node::insert($nodes);
    }
}
