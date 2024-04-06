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
            // ['name' => 'A1', 'title' => 'New Baneshwor - Koteshwor', 'lat1' => 27.6892, 'lng1' => 85.3298, 'lat2' => 27.6806, 'lng2' => 85.3469],
            // ['name' => 'A2', 'title' => 'Koteshwor - New Baneshwor', 'lat1' => 27.6806, 'lng1' => 85.3469, 'lat2' => 27.6892, 'lng2' => 85.3298],

            ['name' => 'B1', 'title' => 'Koteshwor - Jadibuti', 'lat1' => 27.679001, 'lng1' => 85.349374, 'lat2' => 27.675120, 'lng2' => 85.352063],
            ['name' => 'B1', 'title' => 'Jadibuti - Koteshwor', 'lat1' => 27.675120, 'lng1' => 85.352063, 'lat2' => 27.679001, 'lng2' => 85.349374],

            ['name' => 'C1', 'title' => 'Jadibuti - Pepsicola', 'lat1' => 27.675120, 'lng1' => 85.352063, 'lat2' => 27.689183, 'lng2' => 85.360791],
            ['name' => 'C2', 'title' => 'Pepsicola - Jadibuti', 'lat1' => 27.689183, 'lng1' => 85.360791, 'lat2' => 27.675120, 'lng2' => 85.352063],

            ['name' => 'D1', 'title' => 'Jadibuti - Lokanthali', 'lat1' => 27.675120, 'lng1' => 85.352063, 'lat2' => 27.674608, 'lng2' => 85.360525],
            ['name' => 'D2', 'title' => 'Lokanthali - Jadibuti', 'lat1' => 27.674608, 'lng1' => 85.360525, 'lat2' => 27.675120, 'lng2' => 85.352063],
            
            ['name' => 'C1', 'title' => 'Jadibuti - Laligurans', 'lat1' => 27.675120, 'lng1' => 85.352063, 'lat2' => 27.668459, 'lng2' => 85.349430],
            ['name' => 'C1', 'title' => 'Laligurans - Jadibuti', 'lat1' => 27.668459, 'lng1' => 85.349430, 'lat2' => 27.675120, 'lng2' => 85.352063],

            ['name' => 'E1', 'title' => 'Lokanthali - Kausaltar', 'lat1' => 27.674608, 'lng1' => 85.360525, 'lat2' => 27.674209, 'lng2' => 85.365494],
            ['name' => 'E1', 'title' => 'Kausaltar - Lokanthali', 'lat1' => 27.674209, 'lng1' => 85.365494, 'lat2' => 27.674608, 'lng2' => 85.360525],

            ['name' => 'F1', 'title' => 'Kausaltar - Gatthaghar', 'lat1' => 27.674209, 'lng1' => 85.365494, 'lat2' => 27.674345, 'lng2' => 85.373964],
            ['name' => 'F1', 'title' => 'Gatthaghar - Kausaltar', 'lat1' => 27.674345, 'lng1' => 85.373964, 'lat2' => 27.674209, 'lng2' => 85.365494],

            ['name' => 'F1', 'title' => 'Kausaltar - Redcross Chowk', 'lat1' => 27.674209, 'lng1' => 85.365494, 'lat2' => 27.669490, 'lng2' => 85.365914],
            ['name' => 'F1', 'title' => 'Redcross Chowk - Kausaltar', 'lat1' => 27.669490, 'lng1' => 85.365914, 'lat2' => 27.674209, 'lng2' => 85.365494],

            ['name' => 'G1', 'title' => 'Gatthaghar - Sanothimi Ground', 'lat1' => 27.674345, 'lng1' => 85.373964, 'lat2' => 27.681853, 'lng2' => 85.377238],
            ['name' => 'G1', 'title' => 'Sanothimi Ground - Gatthaghar', 'lat1' => 27.681853, 'lng1' => 85.377238, 'lat2' => 27.674345, 'lng2' => 85.373964],

            ['name' => 'G1', 'title' => 'Gatthaghar - Naya Thimi', 'lat1' => 27.674345, 'lng1' => 85.373964, 'lat2' => 27.673174, 'lng2' => 85.385452],
            ['name' => 'G1', 'title' => 'Naya Thimi - Gatthaghar', 'lat1' => 27.673174, 'lng1' => 85.385452, 'lat2' => 27.674345, 'lng2' => 85.373964],

            ['name' => 'H1', 'title' => 'Naya Thimi - Radhe Radhe', 'lat1' => 27.673174, 'lng1' => 85.385452, 'lat2' => 27.674321, 'lng2' => 85.397291],
            ['name' => 'H1', 'title' => 'Radhe Radhe - Naya Thimi', 'lat1' => 27.674321, 'lng1' => 85.397291, 'lat2' => 27.673174, 'lng2' => 85.385452],

            ['name' => 'H1', 'title' => 'Radhe Radhe - Sallaghari', 'lat1' => 27.674321, 'lng1' => 85.397291, 'lat2' => 27.672395, 'lng2' => 85.407767],
            ['name' => 'H1', 'title' => 'Sallaghari - Radhe Radhe', 'lat1' => 27.672395, 'lng1' => 85.407767, 'lat2' => 27.674321, 'lng2' => 85.397291],

            ['name' => 'H2', 'title' => 'Sallaghari - Suryabinayak', 'lat1' => 27.672395, 'lng1' => 85.407767, 'lat2' => 27.665471, 'lng2' => 85.424229],
            ['name' => 'H2', 'title' => 'Suryabinayak - Sallaghari', 'lat1' => 27.665471, 'lng1' => 85.424229, 'lat2' => 27.672395, 'lng2' => 85.407767],
        
            ['name' => 'B1', 'title' => 'Pepsicola - NOC', 'lat1' => 27.689183, 'lng1' => 85.360791, 'lat2' => 27.682653, 'lng2' => 85.370070],
            ['name' => 'B1', 'title' => 'NOC - Pepsicola', 'lat1' => 27.682653, 'lng1' => 85.370070, 'lat2' => 27.689183, 'lng2' => 85.360791],

            ['name' => 'C1', 'title' => 'NOC - Sanothimi Ground', 'lat1' => 27.682653, 'lng1' => 85.370070, 'lat2' => 27.681853, 'lng2' => 85.377238],
            ['name' => 'C1', 'title' => 'Sanothimi Ground - NOC', 'lat1' => 27.681853, 'lng1' => 85.377238, 'lat2' => 27.682653, 'lng2' => 85.370070],

            ['name' => 'D1', 'title' => 'Sanothimi Ground - Madhyapur Thimi', 'lat1' => 27.681853, 'lng1' => 85.377238, 'lat2' => 27.682830, 'lng2' => 85.387610],
            ['name' => 'D1', 'title' => 'Madhyapur Thimi - Sanothimi Ground', 'lat1' => 27.682830, 'lng1' => 85.387610, 'lat2' => 27.681853, 'lng2' => 85.377238],
            
            ['name' => 'C1', 'title' => 'Madhyapur Thimi - Bode', 'lat1' => 27.682830, 'lng1' => 85.387610, 'lat2' => 27.690199, 'lng2' => 85.391082],
            ['name' => 'C1', 'title' => 'Bode - Madhyapur Thimi', 'lat1' => 27.690199, 'lng1' => 85.391082, 'lat2' => 27.682830, 'lng2' => 85.387610],

            ['name' => 'E2', 'title' => 'Pepsicola - Khahare Chowk', 'lat1' => 27.689183, 'lng1' => 85.360791, 'lat2' => 27.696435, 'lng2' => 85.366234],
            ['name' => 'E2', 'title' => 'Khahare Chowk - Pepsicola', 'lat1' => 27.696435, 'lng1' => 85.366234, 'lat2' => 27.689183, 'lng2' => 85.360791],

            ['name' => 'F1', 'title' => 'Khahare Chowk - Kadaghari', 'lat1' => 27.696435, 'lng1' => 85.366234,  'lat2'=>27.697726, 'lng2' => 85.371774],
            ['name' => 'F1', 'title' => 'Kadaghari - Khahare Chowk', 'lat1' => 27.697726, 'lng1' => 85.371774, 'lat2' => 27.696435, 'lng2' => 85.366234],

            ['name' => 'G1', 'title' => 'Khahare Chowk - Mantar', 'lat1' => 27.674345, 'lng1' => 85.373964, 'lat2' => 27.673174, 'lng2' => 85.385452],
            ['name' => 'G1', 'title' => 'Mantar - Khahare Chowk', 'lat1' => 27.673174, 'lng1' => 85.385452, 'lat2' => 27.674345, 'lng2' => 85.373964],

            ['name' => 'G1', 'title' => 'Mantar - Tej Binayek', 'lat1' => 27.673174, 'lng1' => 85.385452, 'lat2' => 27.706910, 'lng2' => 85.378874],
            ['name' => 'G1', 'title' => 'Tej Binayek - Mantar', 'lat1' => 27.706910, 'lng1' => 85.378874, 'lat2' => 27.673174, 'lng2' => 85.385452],

            ['name' => 'F1', 'title' => 'Kadaghari - Gothatar', 'lat1' => 27.697726, 'lng1' => 85.371774, 'lat2' => 27.701133, 'lng2' => 85.379180],
            ['name' => 'F1', 'title' => 'Gothatar - Kadaghari', 'lat1' => 27.701133, 'lng1' => 85.379180, 'lat2' => 27.697726, 'lng2' => 85.371774],

            ['name' => 'G1', 'title' => 'Gothatar - Tej Binayek', 'lat1' => 27.674345, 'lng1' => 85.373964, 'lat2' => 27.706910, 'lng2' => 85.378874],
            ['name' => 'G1', 'title' => 'Tej Binayek - Gothatar', 'lat1' => 27.706910, 'lng1' => 85.378874, 'lat2' => 27.674345, 'lng2' => 85.373964],

            ['name' => 'G1', 'title' => 'Tej Binayek - Chapabot', 'lat1' => 27.706910, 'lng1' => 85.378874, 'lat2' => 27.707639, 'lng2' => 85.383083],
            ['name' => 'G1', 'title' => 'Chapabot - Tej Binayek', 'lat1' => 27.707639, 'lng1' => 85.383083, 'lat2' => 27.706910, 'lng2' => 85.378874],

            ['name' => 'H1', 'title' => 'Gothatar - Thapagoan', 'lat1' => 27.674345, 'lng1' => 85.373964, 'lat2' => 27.700882, 'lng2' => 85.385171],
            ['name' => 'H1', 'title' => 'Thapagoan - Gothatar', 'lat1' => 27.700882, 'lng1' => 85.385171, 'lat2' => 27.674345, 'lng2' => 85.373964],

            ['name' => 'H1', 'title' => 'Thapagoan - Mulpani', 'lat1' => 27.700882, 'lng1' => 85.385171, 'lat2' => 27.703856, 'lng2' => 85.390515],
            ['name' => 'H1', 'title' => 'Mulpani - Thapagoan', 'lat1' => 27.703856, 'lng1' => 85.390515, 'lat2' => 27.700882, 'lng2' => 85.385171],

            ['name' => 'H1', 'title' => 'Thapagoan - Chapabot', 'lat1' => 27.700882, 'lng1' => 85.385171, 'lat2' => 27.707639, 'lng2' => 85.383083],
            ['name' => 'H1', 'title' => 'Chapabot - Thapagoan', 'lat1' => 27.707639, 'lng1' => 85.383083, 'lat2' => 27.700882, 'lng2' => 85.385171],

            ['name' => 'H1', 'title' => 'Chapabot - Bhaimal', 'lat1' => 27.707639, 'lng1' => 85.383083, 'lat2' => 27.708523, 'lng2' => 85.388647],
            ['name' => 'H1', 'title' => 'Bhaimal - Chapabot', 'lat1' => 27.708523, 'lng1' => 85.388647, 'lat2' => 27.707639, 'lng2' => 85.383083],

            ['name' => 'H1', 'title' => 'Pipalbot - Bhaimal', 'lat1' => 27.706312, 'lng1' => 85.394008, 'lat2' => 27.708523, 'lng2' => 85.388647],
            ['name' => 'H1', 'title' => 'Bhaimal - Pipalbot', 'lat1' => 27.708523, 'lng1' => 85.388647, 'lat2' => 27.706312, 'lng2' => 85.394008],

            ['name' => 'H2', 'title' => 'Mulpani - Pipalbot', 'lat1' => 27.703856, 'lng1' => 85.390515, 'lat2' => 27.706312, 'lng2' => 85.394008],
            ['name' => 'H2', 'title' => 'Pipalbot - Mulpani', 'lat1' => 27.706312, 'lng1' => 85.394008, 'lat2' => 27.703856, 'lng2' => 85.390515],


            ['name' => 'B1', 'title' => 'Koteshwor - Balkumari Pul', 'lat1' => 27.679001, 'lng1' => 85.349374, 'lat2' => 27.673604, 'lng2' => 85.342603],
            ['name' => 'B1', 'title' => 'Balkumari Pul - Koteshwor', 'lat1' => 27.673604, 'lng1' => 85.342603, 'lat2' => 27.679001, 'lng2' => 85.349374],
             
            ['name' => 'H1', 'title' => 'Balkumari Pul - Laligurans', 'lat1' => 27.673604, 'lng1' => 85.342603, 'lat2' => 27.668459, 'lng2' => 85.349430],
            ['name' => 'H1', 'title' => 'Laligurans - Balkumari Pul', 'lat1' => 27.668459, 'lng1' => 85.349430, 'lat2' => 27.673604, 'lng2' => 85.342603],

            ['name' => 'H1', 'title' => 'Laligurans - Mahalaxmi', 'lat1' => 27.668459, 'lng1' => 85.349430, 'lat2' => 27.667652, 'lng2' => 85.349164],
            ['name' => 'H1', 'title' => 'Mahalaxmi - Laligurans', 'lat1' => 27.667652, 'lng1' => 85.349164, 'lat2' => 27.668459, 'lng2' => 85.349430],

            ['name' => 'H1', 'title' => 'Mahalaxmi - Tikathali', 'lat1' => 27.667652, 'lng1' => 85.349164, 'lat2' => 27.667150, 'lng2' => 85.353295],
            ['name' => 'H1', 'title' => 'Mahalaxmi - Tikathali', 'lat1' => 27.667652, 'lng1' => 85.349164, 'lat2' => 27.667150, 'lng2' => 85.353295],

            ['name' => 'H2', 'title' => 'Tikathali - Radhakrishna', 'lat1' => 27.667150, 'lng1' => 85.353295, 'lat2' => 27.665540, 'lng2' => 85.355763],
            ['name' => 'H2', 'title' => 'Radhakrishna - Tikathali', 'lat1' => 27.665540, 'lng1' => 85.355763, 'lat2' => 27.667150, 'lng2' => 85.353295],

            ['name' => 'H1', 'title' => 'Radhakrishna - Kharibot', 'lat1' => 27.665540, 'lng1' => 85.355763, 'lat2' => 27.664817, 'lng2' => 85.359119],
            ['name' => 'H1', 'title' => 'Kharibot - Radhakrishna', 'lat1' => 27.664817, 'lng1' => 85.359119, 'lat2' => 27.665540, 'lng2' => 85.355763],

            ['name' => 'H2', 'title' => 'Kharibot - Godawori River', 'lat1' => 27.664817, 'lng1' => 85.359119, 'lat2' => 27.664208, 'lng2' => 85.363265],
            ['name' => 'H2', 'title' => 'Godawori River - Kharibot', 'lat1' => 27.664208, 'lng1' => 85.363265, 'lat2' => 27.664817, 'lng2' => 85.359119],

            ['name' => 'H2', 'title' => 'Godawori River - Anatantalingeshwar', 'lat1' => 27.664208, 'lng1' => 85.363265, 'lat2' => 27.662547, 'lng2' => 85.367804],
            ['name' => 'H2', 'title' => 'Anatantalingeshwar - Godawori River', 'lat1' => 27.662547, 'lng1' => 85.367804, 'lat2' => 27.664208, 'lng2' => 85.363265],

            ['name' => 'H2', 'title' => 'Anatantalingeshwar - Balkot Chowk', 'lat1' => 27.662547, 'lng1' => 85.367804, 'lat2' => 27.665948, 'lng2' => 85.366460],
            ['name' => 'H2', 'title' => 'Balkot Chowk - Anatantalingeshwar', 'lat1' => 27.665948, 'lng1' => 85.366460, 'lat2' => 27.662547, 'lng2' => 85.367804],

            ['name' => 'H2', 'title' => 'Balkot Chowk - Redcross Chowk', 'lat1' => 27.665948, 'lng1' => 85.366460, 'lat2' => 27.669490, 'lng2' => 85.365914],
            ['name' => 'H2', 'title' => 'Redcross Chowk - Balkot Chowk', 'lat1' => 27.669490, 'lng1' => 85.365914, 'lat2' => 27.665948, 'lng2' => 85.366460],
        ];
        Edge::insert($edges);
    }
}
