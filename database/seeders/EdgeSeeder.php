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

            ['name' => 'G1', 'title' => 'Khahare Chowk - Mantar', 'lat1' => 27.674345, 'lng1' => 85.373964, 'lat2' => 27.705902, 'lng2' => 85.370739],
            ['name' => 'G1', 'title' => 'Mantar - Khahare Chowk', 'lat1' => 27.705902, 'lng1' => 85.370739, 'lat2' => 27.674345, 'lng2' => 85.373964],

            ['name' => 'G1', 'title' => 'Mantar - Tej Binayek', 'lat1' => 27.705902, 'lng1' => 85.370739, 'lat2' => 27.706910, 'lng2' => 85.378874],
            ['name' => 'G1', 'title' => 'Tej Binayek - Mantar', 'lat1' => 27.706910, 'lng1' => 85.378874, 'lat2' => 27.705902, 'lng2' => 85.370739],

            ['name' => 'F1', 'title' => 'Kadaghari - Gothatar', 'lat1' => 27.697726, 'lng1' => 85.371774, 'lat2' => 27.701133, 'lng2' => 85.379180],
            ['name' => 'F1', 'title' => 'Gothatar - Kadaghari', 'lat1' => 27.701133, 'lng1' => 85.379180, 'lat2' => 27.697726, 'lng2' => 85.371774],

            ['name' => 'G1', 'title' => 'Gothatar - Tej Binayek', 'lat1' => 27.701133, 'lng1' => 85.379180, 'lat2' => 27.706910, 'lng2' => 85.378874],
            ['name' => 'G1', 'title' => 'Tej Binayek - Gothatar', 'lat1' => 27.706910, 'lng1' => 85.378874, 'lat2' => 27.701133, 'lng2' => 85.379180],

            ['name' => 'G1', 'title' => 'Tej Binayek - Chapabot', 'lat1' => 27.706910, 'lng1' => 85.378874, 'lat2' => 27.707639, 'lng2' => 85.383083],
            ['name' => 'G1', 'title' => 'Chapabot - Tej Binayek', 'lat1' => 27.707639, 'lng1' => 85.383083, 'lat2' => 27.706910, 'lng2' => 85.378874],

            ['name' => 'H1', 'title' => 'Gothatar - Thapagoan', 'lat1' => 27.701133, 'lng1' => 85.379180, 'lat2' => 27.700882, 'lng2' => 85.385171],
            ['name' => 'H1', 'title' => 'Thapagoan - Gothatar', 'lat1' => 27.700882, 'lng1' => 85.385171, 'lat2' => 27.701133, 'lng2' => 85.379180],

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
             
            ['name' => 'H1', 'title' => 'Balkumari Pul - CCRC', 'lat1' => 27.673604, 'lng1' => 85.342603, 'lat2' => 27.671407, 'lng2' => 85.344999],
            ['name' => 'H1', 'title' => 'CCRC - Balkumari Pul', 'lat1' => 27.671407, 'lng1' => 85.344999, 'lat2' => 27.673604, 'lng2' => 85.342603],

            ['name' => 'H1', 'title' => 'CCRC - Laligurans', 'lat1' => 27.671407, 'lng1' => 85.344999, 'lat2' => 27.668459, 'lng2' => 85.349430],
            ['name' => 'H1', 'title' => 'Laligurans - CCRC', 'lat1' => 27.668459, 'lng1' => 85.349430, 'lat2' => 27.671407, 'lng2' => 85.344999],

            ['name' => 'H1', 'title' => 'Laligurans - Mahalaxmi', 'lat1' => 27.668459, 'lng1' => 85.349430, 'lat2' => 27.667652, 'lng2' => 85.349164],
            ['name' => 'H1', 'title' => 'Mahalaxmi - Laligurans', 'lat1' => 27.667652, 'lng1' => 85.349164, 'lat2' => 27.668459, 'lng2' => 85.349430],

            ['name' => 'H1', 'title' => 'Mahalaxmi - Tikathali', 'lat1' => 27.667652, 'lng1' => 85.349164, 'lat2' => 27.667150, 'lng2' => 85.353295],
            ['name' => 'H1', 'title' => 'Tikathali - Mahalaxmi', 'lat1' => 27.667150, 'lng1' => 85.353295, 'lat2' => 27.667652, 'lng2' => 85.349164],

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



            ['name' => 'H2', 'title' => 'Balkumari Pul - Balkumari', 'lat1' => 27.673604, 'lng1' => 85.342603, 'lat2' => 27.670090, 'lng2' => 85.338433],
            ['name' => 'H2', 'title' => 'Balkumari - Balkumari Pul', 'lat1' => 27.670090, 'lng1' => 85.338433, 'lat2' => 27.673604, 'lng2' => 85.342603],
            
            ['name' => 'H2', 'title' => 'Balkumari - Bhol Dhoka', 'lat1' => 27.670090, 'lng1' => 85.338433, 'lat2' => 27.673102, 'lng2' => 85.332208],
            ['name' => 'H2', 'title' => 'Bhol Dhoka - Balkumari', 'lat1' => 27.673102, 'lng1' => 85.332208, 'lat2' => 27.670090, 'lng2' => 85.338433],

            ['name' => 'H2', 'title' => 'Bhol Dhoka - Patan DS', 'lat1' => 27.673102, 'lng1' => 85.332208, 'lat2' => 27.674703, 'lng2' => 85.325657],
            ['name' => 'H2', 'title' => 'Patan DS - Bhol Dhoka', 'lat1' => 27.674703, 'lng1' => 85.325657, 'lat2' => 27.673102, 'lng2' => 85.332208],

            ['name' => 'H2', 'title' => 'Patan DS - Patan Dhoka', 'lat1' => 27.674703, 'lng1' => 85.325657, 'lat2' => 27.678737, 'lng2' => 85.320945],
            ['name' => 'H2', 'title' => 'Patan Dhoka - Patan DS', 'lat1' => 27.678737, 'lng1' => 85.320945, 'lat2' => 27.674703, 'lng2' => 85.325657],

            ['name' => 'H2', 'title' => 'Patan Dhoka - Chakupat', 'lat1' => 27.678737, 'lng1' => 85.320945, 'lat2' => 27.684871, 'lng2' => 85.318719],
            ['name' => 'H2', 'title' => 'Chakupat - Patan Dhoka', 'lat1' => 27.684871, 'lng1' => 85.318719, 'lat2' => 27.678737, 'lng2' => 85.320945],

            ['name' => 'H2', 'title' => 'Chakupat - Kupandol', 'lat1' => 27.684871, 'lng1' => 85.318719, 'lat2' => 27.688908, 'lng2' => 85.316113],
            ['name' => 'H2', 'title' => 'Kupandol - Chakupat', 'lat1' => 27.688908, 'lng1' => 85.316113, 'lat2' => 27.684871, 'lng2' => 85.318719],

            ['name' => 'H2', 'title' => 'Chakupat - Pulchowk', 'lat1' => 27.684871, 'lng1' => 85.318719, 'lat2' => 27.676778, 'lng2' => 85.316473],
            ['name' => 'H2', 'title' => 'Pulchowk - Chakupat', 'lat1' => 27.676778, 'lng1' => 85.316473, 'lat2' => 27.684871, 'lng2' => 85.318719],
            
            ['name' => 'H2', 'title' => 'Kupandol - Tripuramarga', 'lat1' => 27.688908, 'lng1' => 85.316113, 'lat2' => 27.690779, 'lng2' => 85.317420],
            ['name' => 'H2', 'title' => 'Tripuramarga - Kupandol', 'lat1' => 27.690779, 'lng1' => 85.317420, 'lat2' => 27.688908, 'lng2' => 85.316113],

            ['name' => 'H2', 'title' => 'Tripuramarga - Maitighar', 'lat1' => 27.690779, 'lng1' => 85.317420, 'lat2' => 27.694282, 'lng2' => 85.319754],
            ['name' => 'H2', 'title' => 'Maitighar - Tripuramarga', 'lat1' => 27.694282, 'lng1' => 85.319754, 'lat2' => 27.690779, 'lng2' => 85.317420],

            ['name' => 'H2', 'title' => 'Maitighar - Babarmahal', 'lat1' => 27.694282, 'lng1' => 85.319754, 'lat2' => 27.692496, 'lng2' => 85.324827],
            ['name' => 'H2', 'title' => 'Babarmahal - Maitighar', 'lat1' => 27.692496, 'lng1' => 85.324827, 'lat2' => 27.694282, 'lng2' => 85.319754],

            ['name' => 'H2', 'title' => 'Babarmahal - Bijulibazar', 'lat1' => 27.692496, 'lng1' => 85.324827, 'lat2' => 27.690005, 'lng2' => 85.328612],
            ['name' => 'H2', 'title' => 'Bijulibazar - Babarmahal', 'lat1' => 27.690005, 'lng1' => 85.328612, 'lat2' => 27.692496, 'lng2' => 85.324827],

            ['name' => 'H2', 'title' => 'Bijulibazar - Alphabeta', 'lat1' => 27.690005, 'lng1' => 85.328612, 'lat2' => 27.688924, 'lng2' => 85.331658],
            ['name' => 'H2', 'title' => 'Alphabeta - Bijulibazar', 'lat1' => 27.688924, 'lng1' => 85.331658, 'lat2' => 27.690005, 'lng2' => 85.328612],

            ['name' => 'H2', 'title' => 'Alphabeta - New Baneshwor', 'lat1' => 27.688924, 'lng1' => 85.331658, 'lat2' => 27.688041, 'lng2' => 85.335630],
            ['name' => 'H2', 'title' => 'New Baneshwor - Alphabeta', 'lat1' => 27.688041, 'lng1' => 85.335630, 'lat2' => 27.688924, 'lng2' => 85.331658],

            ['name' => 'H2', 'title' => 'New Baneshwor - Tinkune', 'lat1' => 27.688041, 'lng1' => 85.335630, 'lat2' => 27.685367, 'lng2' => 85.349132],
            ['name' => 'H2', 'title' => 'Tinkune - New Baneshwor', 'lat1' => 27.685367, 'lng1' => 85.349132, 'lat2' => 27.688041, 'lng2' => 85.335630],

            ['name' => 'H2', 'title' => 'New Baneshwor - Sankhamul', 'lat1' => 27.688041, 'lng1' => 85.335630, 'lat2' => 27.681269, 'lng2' => 85.331963],
            ['name' => 'H2', 'title' => 'Sankhamul - New Baneshwor', 'lat1' => 27.681269, 'lng1' => 85.331963, 'lat2' => 27.688041, 'lng2' => 85.335630],

            ['name' => 'H2', 'title' => 'Sankhamul - Mangalbazar', 'lat1' => 27.681269, 'lng1' => 85.331963, 'lat2' => 27.679482, 'lng2' => 85.329354],
            ['name' => 'H2', 'title' => 'Mangalbazar - Sankhamul', 'lat1' => 27.679482, 'lng1' => 85.329354, 'lat2' => 27.681269, 'lng2' => 85.331963],

            ['name' => 'H2', 'title' => 'Mangalbazar - Patan DS', 'lat1' => 27.679482, 'lng1' => 85.329354, 'lat2' => 27.674703, 'lng2' => 85.325657],
            ['name' => 'H2', 'title' => 'Patan DS - Mangalbazar', 'lat1' => 27.674703, 'lng1' => 85.325657, 'lat2' => 27.679482, 'lng2' => 85.329354],
            
            ['name' => 'B1', 'title' => 'Koteshwor - Tinkune', 'lat1' => 27.679001, 'lng1' => 85.349374, 'lat2' => 27.685367, 'lng2' => 85.349132],
            ['name' => 'B1', 'title' => 'Tinkune - Koteshwor', 'lat1' => 27.685367, 'lng1' => 85.349132, 'lat2' => 27.679001, 'lng2' => 85.349374],

            
            ['name' => 'H2', 'title' => 'Balkumari - Gwarko', 'lat1' => 27.670090, 'lng1' => 85.338433, 'lat2' => 27.666433, 'lng2' => 85.332274],
            ['name' => 'H2', 'title' => 'Gwarko - Balkumari', 'lat1' => 27.666433, 'lng1' => 85.332274, 'lat2' => 27.670090, 'lng2' => 85.338433],

            ['name' => 'H2', 'title' => 'Gwarko - Satdobato', 'lat1' => 27.666433, 'lng1' => 85.332274, 'lat2' => 27.658426, 'lng2' => 85.324676],
            ['name' => 'H2', 'title' => 'Satdobato - Gwarko', 'lat1' => 27.658426, 'lng1' => 85.324676, 'lat2' => 27.666433, 'lng2' => 85.332274],

            ['name' => 'H2', 'title' => 'Satdobato - Chapagaundobato', 'lat1' => 27.658426, 'lng1' => 85.324676, 'lat2' => 27.657568, 'lng2' => 85.322646],
            ['name' => 'H2', 'title' => 'Chapagaundobato - Satdobato', 'lat1' => 27.657568, 'lng1' => 85.322646, 'lat2' => 27.658426, 'lng2' => 85.324676],

            ['name' => 'H2', 'title' => 'Chapagaundobato - Mahalaxmisthan', 'lat1' => 27.657568, 'lng1' => 85.322646, 'lat2' => 27.661580, 'lng2' => 85.317471],
            ['name' => 'H2', 'title' => 'Mahalaxmisthan - Chapagaundobato', 'lat1' => 27.661580, 'lng1' => 85.317471, 'lat2' => 27.657568, 'lng2' => 85.322646],

            ['name' => 'H2', 'title' => 'Mahalaxmisthan - Kusunti', 'lat1' => 27.661580, 'lng1' => 85.317471, 'lat2' => 27.664906, 'lng2' => 85.313192],
            ['name' => 'H2', 'title' => 'Kusunti - Mahalaxmisthan', 'lat1' => 27.664906, 'lng1' => 85.313192, 'lat2' => 27.661580, 'lng2' => 85.317471],

            ['name' => 'H2', 'title' => 'Kusunti - Nakhkhu', 'lat1' => 27.664906, 'lng1' => 85.313192, 'lat2' => 27.666600, 'lng2' => 85.308006],
            ['name' => 'H2', 'title' => 'Nakhkhu - Kusunti', 'lat1' => 27.666600, 'lng1' => 85.308006, 'lat2' => 27.664906, 'lng2' => 85.313192],

            ['name' => 'H2', 'title' => 'Nakhkhu - Ekantakuna', 'lat1' => 27.666600, 'lng1' => 85.308006, 'lat2' => 27.669754, 'lng2' => 85.310850],
            ['name' => 'H2', 'title' => 'Ekantakuna - Nakhkhu', 'lat1' => 27.669754, 'lng1' => 85.310850, 'lat2' => 27.666600, 'lng2' => 85.308006],

            ['name' => 'H2', 'title' => 'Ekantakuna - Jawalakhel', 'lat1' => 27.669754, 'lng1' => 85.310850, 'lat2' => 27.672981, 'lng2' => 85.314096],
            ['name' => 'H2', 'title' => 'Jawalakhel - Ekantakuna', 'lat1' => 27.672981, 'lng1' => 85.314096, 'lat2' => 27.669754, 'lng2' => 85.310850],

            //new
            ['name' => 'H2', 'title' => 'Pulchowk - Labim', 'lat1' => 27.676778, 'lng1' => 85.316473, 'lat2' => 27.676035, 'lng2' => 85.318144],
            ['name' => 'H2', 'title' => 'Labim - Pulchowk', 'lat1' => 27.676035, 'lng1' => 85.318144, 'lat2' => 27.676778, 'lng2' => 85.316473],

            ['name' => 'H2', 'title' => 'Lakayu - Labim', 'lat1' => 27.673092, 'lng1' => 85.324344, 'lat2' => 27.676035, 'lng2' => 85.318144],
            ['name' => 'H2', 'title' => 'Labim - Lakayu', 'lat1' => 27.676035, 'lng1' => 85.318144, 'lat2' => 27.673092, 'lng2' => 85.324344],

            ['name' => 'H2', 'title' => 'Lakayu - Patan DS', 'lat1' => 27.673092, 'lng1' => 85.324344, 'lat2' => 27.674703, 'lng2' => 85.325657],
            ['name' => 'H2', 'title' => 'Patan DS - Lakayu', 'lat1' => 27.674703, 'lng1' => 85.325657, 'lat2' => 27.673092, 'lng2' => 85.324344],

            ['name' => 'H2', 'title' => 'Pulchowk - Yapa', 'lat1' => 27.676778, 'lng1' => 85.316473, 'lat2' => 27.675710, 'lng2' => 85.315524],
            ['name' => 'H2', 'title' => 'Yapa - Pulchowk', 'lat1' => 27.675710, 'lng1' => 85.315524, 'lat2' => 27.676778, 'lng2' => 85.316473],

            ['name' => 'H2', 'title' => 'Yapa - Jawalakhel', 'lat1' => 27.675710, 'lng1' => 85.315524, 'lat2' => 27.672981, 'lng2' => 85.314096],
            ['name' => 'H2', 'title' => 'Jawalakhel - Yapa', 'lat1' => 27.672981, 'lng1' => 85.314096, 'lat2' => 27.675710, 'lng2' => 85.315524],

            ['name' => 'H2', 'title' => 'Kumaripati - Jawalakhel', 'lat1' => 27.669669, 'lng1' => 85.322088, 'lat2' => 27.672981, 'lng2' => 85.314096],
            ['name' => 'H2', 'title' => 'Jawalakhel - Kumaripati', 'lat1' => 27.672981, 'lng1' => 85.314096, 'lat2' => 27.669669, 'lng2' => 85.322088],

            ['name' => 'H2', 'title' => 'Kumaripati - Prayag Pokhari', 'lat1' => 27.669669, 'lng1' => 85.322088, 'lat2' => 27.668342, 'lng2' => 85.325090],
            ['name' => 'H2', 'title' => 'Prayag Pokhari - Kumaripati', 'lat1' => 27.668342, 'lng1' => 85.325090, 'lat2' => 27.669669, 'lng2' => 85.322088],

            ['name' => 'H2', 'title' => 'Kumaripati - Patan DS', 'lat1' => 27.669669, 'lng1' => 85.322088, 'lat2' => 27.674703, 'lng2' => 85.325657],
            ['name' => 'H2', 'title' => 'Patan DS - Kumaripati', 'lat1' => 27.674703, 'lng1' => 85.325657, 'lat2' => 27.669669, 'lng2' => 85.322088],

            ['name' => 'H2', 'title' => 'Kumaripati - Patan Hospital', 'lat1' => 27.669669, 'lng1' => 85.322088, 'lat2' => 27.668074, 'lng2' => 85.321527],
            ['name' => 'H2', 'title' => 'Patan Hospital - Kumaripati', 'lat1' => 27.668074, 'lng1' => 85.321527, 'lat2' => 27.669669, 'lng2' => 85.322088],

            ['name' => 'H2', 'title' => 'Lagankhel - Patan Hospital', 'lat1' => 27.666639, 'lng1' => 85.323477, 'lat2' => 27.668074, 'lng2' => 85.321527],
            ['name' => 'H2', 'title' => 'Patan Hospital - Lagankhel', 'lat1' => 27.668074, 'lng1' => 85.321527, 'lat2' => 27.666639, 'lng2' => 85.323477],

            ['name' => 'H2', 'title' => 'Lagankhel - Prayag Pokhari', 'lat1' => 27.666639, 'lng1' => 85.323477, 'lat2' => 27.668342, 'lng2' => 85.325090],
            ['name' => 'H2', 'title' => 'Prayag Pokhari - Lagankhel', 'lat1' => 27.668342, 'lng1' => 85.325090, 'lat2' => 27.666639, 'lng2' => 85.323477],

            ['name' => 'H2', 'title' => 'Sincha - Prayag Pokhari', 'lat1' => 27.667305, 'lng1' => 85.330230, 'lat2' => 27.668342, 'lng2' => 85.325090],
            ['name' => 'H2', 'title' => 'Prayag Pokhari - Sincha', 'lat1' => 27.668342, 'lng1' => 85.325090, 'lat2' => 27.667305, 'lng2' => 85.330230],

            ['name' => 'H2', 'title' => 'Sincha - Gwarko', 'lat1' => 27.667305, 'lng1' => 85.330230, 'lat2' => 27.666433, 'lng2' => 85.332274],
            ['name' => 'H2', 'title' => 'Gwarko - Sincha', 'lat1' => 27.666433, 'lng1' => 85.332274, 'lat2' => 27.667305, 'lng2' => 85.330230],

            ['name' => 'H2', 'title' => 'Lagankhel - Satdobato', 'lat1' => 27.666639, 'lng1' => 85.323477, 'lat2' => 27.658426, 'lng2' => 85.324676],
            ['name' => 'H2', 'title' => 'Satdobato - Lagankhel', 'lat1' => 27.658426, 'lng1' => 85.324676, 'lat2' => 27.666639, 'lng2' => 85.323477],
        
            //new

            ['name' => 'A1', 'title' => 'Tripuramarga - Tripureshwor', 'lat1' => 27.690779, 'lng1' => 85.317420, 'lat2' => 27.693901, 'lng2' => 85.314087],
            ['name' => 'A1', 'title' => 'Tripureshwor - Tripuramarga', 'lat1' => 27.693901, 'lng1' => 85.314087, 'lat2' => 27.690779, 'lng2' => 85.317420],

            ['name' => 'A1', 'title' => 'DOP - Tripureshwor', 'lat1' => 27.694258, 'lng1' => 85.312138, 'lat2' => 27.693901, 'lng2' => 85.314087],
            ['name' => 'A1', 'title' => 'Tripureshwor - DOP', 'lat1' => 27.693901, 'lng1' => 85.314087, 'lat2' => 27.694258, 'lng2' => 85.312138],

            ['name' => 'A1', 'title' => 'DOP - Teku', 'lat1' => 27.694258, 'lng1' => 85.312138, 'lat2' => 27.696770, 'lng2' => 85.305232],
            ['name' => 'A1', 'title' => 'Teku - DOP', 'lat1' => 27.696770, 'lng1' => 85.305232, 'lat2' => 27.694258, 'lng2' => 85.312138],

            ['name' => 'A1', 'title' => 'Ganeshman - Teku', 'lat1' => 27.698490, 'lng1' => 85.299360, 'lat2' => 27.696770, 'lng2' => 85.305232],
            ['name' => 'A1', 'title' => 'Teku - Ganeshman', 'lat1' => 27.696770, 'lng1' => 85.305232, 'lat2' => 27.698490, 'lng2' => 85.299360],

            ['name' => 'A1', 'title' => 'Ganeshman - Soltee Mode', 'lat1' => 27.698490, 'lng1' => 85.299360, 'lat2' => 27.696594, 'lng2' => 85.293623],
            ['name' => 'A1', 'title' => 'Soltee Mode - Ganeshman', 'lat1' => 27.696594, 'lng1' => 85.293623, 'lat2' => 27.698490, 'lng2' => 85.299360],

            ['name' => 'A1', 'title' => 'Ravi Bhavan - Soltee Mode', 'lat1' => 27.695491, 'lng1' => 85.292459, 'lat2' => 27.696594, 'lng2' => 85.293623],
            ['name' => 'A1', 'title' => 'Soltee Mode - Ravi Bhavan', 'lat1' => 27.696594, 'lng1' => 85.293623, 'lat2' => 27.695491, 'lng2' => 85.292459],

            ['name' => 'A1', 'title' => 'Ravi Bhavan - Puspalal', 'lat1' => 27.695491, 'lng1' => 85.292459, 'lat2' => 27.695706, 'lng2' => 85.290704],
            ['name' => 'A1', 'title' => 'Puspalal - Ravi Bhavan', 'lat1' => 27.695706, 'lng1' => 85.290704, 'lat2' => 27.695491, 'lng2' => 85.292459],

            ['name' => 'A1', 'title' => 'Kalanki Mandhir - Puspalal', 'lat1' => 27.694387, 'lng1' => 85.285568, 'lat2' => 27.695706, 'lng2' => 85.290704],
            ['name' => 'A1', 'title' => 'Puspalal - Kalanki Mandhir', 'lat1' => 27.695706, 'lng1' => 85.290704, 'lat2' => 27.694387, 'lng2' => 85.285568],

            ['name' => 'A1', 'title' => 'Kalanki Mandhir - Kalanki', 'lat1' => 27.694387, 'lng1' => 85.285568, 'lat2' => 27.693353, 'lng2' => 85.281638],
            ['name' => 'A1', 'title' => 'Kalanki - Kalanki Mandhir', 'lat1' => 27.693353, 'lng1' => 85.281638, 'lat2' => 27.694387, 'lng2' => 85.285568],


            
            ['name' => 'H2', 'title' => 'Ekantakuna - Megha Hospital', 'lat1' => 27.669754, 'lng1' => 85.310850, 'lat2' => 27.674698, 'lng2' => 85.301982],
            ['name' => 'H2', 'title' => 'Megha Hospital - Ekantakuna', 'lat1' => 27.674698, 'lng1' => 85.301982, 'lat2' => 27.669754, 'lng2' => 85.310850],

            ['name' => 'H2', 'title' => 'Dhobighat - Megha Hospital', 'lat1' => 27.678476, 'lng1' => 85.302195, 'lat2' => 27.674698, 'lng2' => 85.301982],
            ['name' => 'H2', 'title' => 'Megha Hospital - Dhobighat', 'lat1' => 27.674698, 'lng1' => 85.301982, 'lat2' => 27.678476, 'lng2' => 85.302195],
            
            ['name' => 'H2', 'title' => 'Dhobighat - Jhamsikhel', 'lat1' => 27.678476, 'lng1' => 85.302195, 'lat2' => 27.684199, 'lng2' => 85.302231],
            ['name' => 'H2', 'title' => 'Jhamsikhel - Dhobighat', 'lat1' => 27.684199, 'lng1' => 85.302231, 'lat2' => 27.678476, 'lng2' => 85.302195],
            
            ['name' => 'H2', 'title' => 'Jhamsikhel - Balkhu Pul', 'lat1' => 27.684199, 'lng1' => 85.302231, 'lat2' => 27.684577, 'lng2' => 85.300050],
            ['name' => 'H2', 'title' => 'Balkhu Pul - Jhamsikhel', 'lat1' => 27.684577, 'lng1' => 85.300050, 'lat2' => 27.684199, 'lng2' => 85.302231],
            
            ['name' => 'H2', 'title' => 'Balkhu - Balkhu Pul', 'lat1' => 27.684833, 'lng1' => 85.298084, 'lat2' => 27.684577, 'lng2' => 85.300050],
            ['name' => 'H2', 'title' => 'Balkhu Pul - Balkhu', 'lat1' => 27.684577, 'lng1' => 85.300050, 'lat2' => 27.684833, 'lng2' => 85.298084],
            
            ['name' => 'H2', 'title' => 'Balkhu - TU COE', 'lat1' => 27.684833, 'lng1' => 85.298084, 'lat2' => 27.685502, 'lng2' => 85.293305],
            ['name' => 'H2', 'title' => 'TU COE - Balkhu', 'lat1' => 27.685502, 'lng1' => 85.293305, 'lat2' => 27.684833, 'lng2' => 85.298084],
            
            ['name' => 'H2', 'title' => 'Gaurisakar - TU COE', 'lat1' => 27.687909, 'lng1' => 85.290071, 'lat2' => 27.685502, 'lng2' => 85.293305],
            ['name' => 'H2', 'title' => 'TU COE - Gaurisakar', 'lat1' => 27.685502, 'lng1' => 85.293305, 'lat2' => 27.687909, 'lng2' => 85.290071],
            
            ['name' => 'H2', 'title' => 'Gaurisakar - Sunargaon', 'lat1' => 27.687909, 'lng1' => 85.290071, 'lat2' => 27.688391, 'lng2' => 85.286399],
            ['name' => 'H2', 'title' => 'Sunargaon - Gaurisakar', 'lat1' => 27.688391, 'lng1' => 85.286399, 'lat2' => 27.687909, 'lng2' => 85.290071],
            
            ['name' => 'H2', 'title' => 'Amritnagar - Sunargaon', 'lat1' => 27.689030, 'lng1' => 85.284268, 'lat2' => 27.688391, 'lng2' => 85.286399],
            ['name' => 'H2', 'title' => 'Sunargaon - Amritnagar', 'lat1' => 27.688391, 'lng1' => 85.286399, 'lat2' => 27.689030, 'lng2' => 85.284268],
            
            ['name' => 'H2', 'title' => 'Amritnagar - Bhatbhatini', 'lat1' => 27.689030, 'lng1' => 85.284268, 'lat2' => 27.691365, 'lng2' => 85.282733],
            ['name' => 'H2', 'title' => 'Bhatbhatini - Amritnagar', 'lat1' => 27.691365, 'lng1' => 85.282733, 'lat2' => 27.689030, 'lng2' => 85.284268],
            
            ['name' => 'H2', 'title' => 'Kalanki - Bhatbhatini', 'lat1' => 27.693353, 'lng1' => 85.281638, 'lat2' => 27.691365, 'lng2' => 85.282733],
            ['name' => 'H2', 'title' => 'Bhatbhatini - Kalanki', 'lat1' => 27.691365, 'lng1' => 85.282733, 'lat2' => 27.693353, 'lng2' => 85.281638],
            
            
            
            ['name' => 'H2', 'title' => 'Dhobighat - Dhamkal', 'lat1' => 27.678476, 'lng1' => 85.302195, 'lat2' => 27.678479, 'lng2' => 85.305728],
            ['name' => 'H2', 'title' => 'Dhamkal - Dhobighat', 'lat1' => 27.678479, 'lng1' => 85.305728, 'lat2' => 27.678476, 'lng2' => 85.302195],
            
            ['name' => 'H2', 'title' => 'Dhamkal - St. Mary', 'lat1' => 27.678479, 'lng1' => 85.305728, 'lat2' => 27.676075, 'lng2' => 85.312526],
            ['name' => 'H2', 'title' => 'St. Mary - Dhamkal', 'lat1' => 27.676075, 'lng1' => 85.312526, 'lat2' => 27.678479, 'lng2' => 85.305728],
            
            ['name' => 'H2', 'title' => 'Yapa - St. Mary', 'lat1' => 27.675710, 'lng1' => 85.315524, 'lat2' => 27.676075, 'lng2' => 85.312526],
            ['name' => 'H2', 'title' => 'St. Mary - Yapa', 'lat1' => 27.676075, 'lng1' => 85.312526, 'lat2' => 27.675710, 'lng2' => 85.315524],
            
            ['name' => 'H2', 'title' => 'Jhamsikhel - Sikali', 'lat1' => 27.684199, 'lng1' => 85.302231, 'lat2' => 27.682667, 'lng2' => 85.306423],
            ['name' => 'H2', 'title' => 'Sikali - Jhamsikhel', 'lat1' => 27.682667, 'lng1' => 85.306423, 'lat2' => 27.684199, 'lng2' => 85.302231],
            
            ['name' => 'H2', 'title' => 'Bhyuti - Sikali', 'lat1' => 27.680710, 'lng1' => 85.310307, 'lat2' => 27.682667, 'lng2' => 85.306423],
            ['name' => 'H2', 'title' => 'Sikali - Bhyuti', 'lat1' => 27.682667, 'lng1' => 85.306423, 'lat2' => 27.680710, 'lng2' => 85.310307],
            
            ['name' => 'H2', 'title' => 'Bhyuti - Bakhundol', 'lat1' => 27.680710, 'lng1' => 85.310307, 'lat2' => 27.683981, 'lng2' => 85.312149],
            ['name' => 'H2', 'title' => 'Bakhundol - Bhyuti', 'lat1' => 27.683981, 'lng1' => 85.312149, 'lat2' => 27.680710, 'lng2' => 85.310307],
            
            ['name' => 'H2', 'title' => 'Teen Khamba - Bakhundol', 'lat1' => 27.689714, 'lng1' => 85.314831, 'lat2' => 27.683981, 'lng2' => 85.312149],
            ['name' => 'H2', 'title' => 'Bakhundol - Teen Khamba', 'lat1' => 27.683981, 'lng1' => 85.312149, 'lat2' => 27.689714, 'lng2' => 85.314831],
            
            ['name' => 'H2', 'title' => 'Teen Khamba - Gusingal', 'lat1' => 27.689714, 'lng1' => 85.314831, 'lat2' => 27.691529, 'lng2' => 85.310093],
            ['name' => 'H2', 'title' => 'Gusingal - Teen Khamba', 'lat1' => 27.691529, 'lng1' => 85.310093, 'lat2' => 27.689714, 'lng2' => 85.314831],
            
            ['name' => 'H2', 'title' => 'Teen Khamba - Kupandol', 'lat1' => 27.689714, 'lng1' => 85.314831, 'lat2' => 27.688908, 'lng2' => 85.316113],
            ['name' => 'H2', 'title' => 'Kupandol - Teen Khamba', 'lat1' => 27.688908, 'lng1' => 85.316113, 'lat2' => 27.689714, 'lng2' => 85.314831],
            
            ['name' => 'H2', 'title' => 'Gusingal - Rajtirtha', 'lat1' => 27.691529, 'lng1' => 85.310093, 'lat2' => 27.692304, 'lng2' => 85.304449],
            ['name' => 'H2', 'title' => 'Rajtirtha - Gusingal', 'lat1' => 27.692304, 'lng1' => 85.304449, 'lat2' => 27.691529, 'lng2' => 85.310093],
            
            ['name' => 'H2', 'title' => 'Sanepa - Sikali', 'lat1' => 27.685198, 'lng1' => 85.307208, 'lat2' => 27.682667, 'lng2' => 85.306423],
            ['name' => 'H2', 'title' => 'Sikali - Sanepa', 'lat1' => 27.682667, 'lng1' => 85.306423, 'lat2' => 27.685198, 'lng2' => 85.307208],

            ['name' => 'H2', 'title' => 'Sanepa - Sankata', 'lat1' => 27.685198, 'lng1' => 85.307208, 'lat2' => 27.688562, 'lng2' => 85.308994],
            ['name' => 'H2', 'title' => 'Sankata - Sanepa', 'lat1' => 27.688562, 'lng1' => 85.308994, 'lat2' => 27.685198, 'lng2' => 85.307208],
            
            ['name' => 'H2', 'title' => 'Sanepa - Rajtirtha', 'lat1' => 27.685198, 'lng1' => 85.307208, 'lat2' => 27.692304, 'lng2' => 85.304449],
            ['name' => 'H2', 'title' => 'Rajtirtha - Sanepa', 'lat1' => 27.692304, 'lng1' => 85.304449, 'lat2' => 27.685198, 'lng2' => 85.307208],
            
            ['name' => 'H2', 'title' => 'Sanchal - Rajtirtha', 'lat1' => 27.691147, 'lng1' => 85.302551, 'lat2' => 27.692304, 'lng2' => 85.304449],
            ['name' => 'H2', 'title' => 'Rajtirtha - Sanchal', 'lat1' => 27.692304, 'lng1' => 85.304449, 'lat2' => 27.691147, 'lng2' => 85.302551],
            
            ['name' => 'H2', 'title' => 'Sanchal - Balkhu Pul', 'lat1' => 27.691147, 'lng1' => 85.302551, 'lat2' => 27.684577, 'lng2' => 85.300050],
            ['name' => 'H2', 'title' => 'Balkhu Pul - Sanchal', 'lat1' => 27.684577, 'lng1' => 85.300050, 'lat2' => 27.691147, 'lng2' => 85.302551],
            
            
            
            ['name' => 'H2', 'title' => 'Balkhu - Kitabkalam', 'lat1' => 27.684833, 'lng1' => 85.298084, 'lat2' => 27.688049, 'lng2' => 85.298196],
            ['name' => 'H2', 'title' => 'Kitabkalam - Balkhu', 'lat1' => 27.688049, 'lng1' => 85.298196, 'lat2' => 27.684833, 'lng2' => 85.298084],

            ['name' => 'H2', 'title' => 'Leak - Kitabkalam', 'lat1' => 27.689769, 'lng1' => 85.299435, 'lat2' => 27.688049, 'lng2' => 85.298196],
            ['name' => 'H2', 'title' => 'Kitabkalam - Leak', 'lat1' => 27.688049, 'lng1' => 85.298196, 'lat2' => 27.689769, 'lng2' => 85.299435],

            ['name' => 'H2', 'title' => 'Leak - M8R2', 'lat1' => 27.689769, 'lng1' => 85.299435, 'lat2' => 27.692064, 'lng2' => 85.300893],
            ['name' => 'H2', 'title' => 'M8R2 - Leak', 'lat1' => 27.692064, 'lng1' => 85.300893, 'lat2' => 27.689769, 'lng2' => 85.299435],

            ['name' => 'H2', 'title' => 'Leak - Kuleshwor', 'lat1' => 27.689769, 'lng1' => 85.299435, 'lat2' => 27.693238, 'lng2' => 85.298343],
            ['name' => 'H2', 'title' => 'Kuleshwor - Leak', 'lat1' => 27.693238, 'lng1' => 85.298343, 'lat2' => 27.689769, 'lng2' => 85.299435],

            ['name' => 'H2', 'title' => 'Ganeshman - Kuleshwor', 'lat1' => 27.698490, 'lng1' => 85.299360, 'lat2' => 27.693238, 'lng2' => 85.298343],
            ['name' => 'H2', 'title' => 'Kuleshwor - Ganeshman', 'lat1' => 27.693238, 'lng1' => 85.298343, 'lat2' => 27.698490, 'lng2' => 85.299360],

            ['name' => 'H2', 'title' => 'Sanchal - M8R2', 'lat1' => 27.691147, 'lng1' => 85.302551, 'lat2' => 27.692064, 'lng2' => 85.300893],
            ['name' => 'H2', 'title' => 'M8R2 - Sanchal', 'lat1' => 27.692064, 'lng1' => 85.300893, 'lat2' => 27.691147, 'lng2' => 85.302551],

            ['name' => 'H2', 'title' => 'Teku Dovan - M8R2', 'lat1' => 27.693640, 'lng1' => 85.302008, 'lat2' => 27.692064, 'lng2' => 85.300893],
            ['name' => 'H2', 'title' => 'M8R2 - Teku Dovan', 'lat1' => 27.692064, 'lng1' => 85.300893, 'lat2' => 27.693640, 'lng2' => 85.302008],

            ['name' => 'H2', 'title' => 'Teku Dovan - Sahid Sukra', 'lat1' => 27.693640, 'lng1' => 85.302008, 'lat2' => 27.694102, 'lng2' => 85.304189],
            ['name' => 'H2', 'title' => 'Sahid Sukra - Teku Dovan', 'lat1' => 27.694102, 'lng1' => 85.304189, 'lat2' => 27.693640, 'lng2' => 85.302008],

            ['name' => 'H2', 'title' => 'Rajtirtha - Sahid Sukra', 'lat1' => 27.692304, 'lng1' => 85.304449, 'lat2' => 27.694102, 'lng2' => 85.304189],
            ['name' => 'H2', 'title' => 'Sahid Sukra - Rajtirtha', 'lat1' => 27.694102, 'lng1' => 85.304189, 'lat2' => 27.692304, 'lng2' => 85.304449],

            ['name' => 'H2', 'title' => 'Panchali - Sahid Sukra', 'lat1' => 27.695454, 'lng1' => 85.304525, 'lat2' => 27.694102, 'lng2' => 85.304189],
            ['name' => 'H2', 'title' => 'Sahid Sukra - Panchali', 'lat1' => 27.694102, 'lng1' => 85.304189, 'lat2' => 27.695454, 'lng2' => 85.304525],

            ['name' => 'H2', 'title' => 'Panchali - Teku', 'lat1' => 27.695454, 'lng1' => 85.304525, 'lat2' => 27.696770, 'lng2' => 85.305232],
            ['name' => 'H2', 'title' => 'Teku - Panchali', 'lat1' => 27.696770, 'lng1' => 85.305232, 'lat2' => 27.695454, 'lng2' => 85.304525],




            ['name' => 'H2', 'title' => 'Link - Bhatbhatini', 'lat1' => 27.691023, 'lng1' => 85.287864, 'lat2' => 27.691365, 'lng2' => 85.282733],
            ['name' => 'H2', 'title' => 'Bhatbhatini - Link', 'lat1' => 27.691365, 'lng1' => 85.282733, 'lat2' => 27.691023, 'lng2' => 85.287864],

            ['name' => 'H2', 'title' => 'Link - Sunargaon', 'lat1' => 27.691023, 'lng1' => 85.287864, 'lat2' => 27.688391, 'lng2' => 85.286399],
            ['name' => 'H2', 'title' => 'Sunargaon - Link', 'lat1' => 27.688391, 'lng1' => 85.286399, 'lat2' => 27.691023, 'lng2' => 85.287864],

            ['name' => 'H2', 'title' => 'Link - Godar', 'lat1' => 27.691023, 'lng1' => 85.287864, 'lat2' => 27.692199, 'lng2' => 85.288783],
            ['name' => 'H2', 'title' => 'Godar - Link', 'lat1' => 27.692199, 'lng1' => 85.288783, 'lat2' => 27.691023, 'lng2' => 85.287864],

            ['name' => 'H2', 'title' => 'SKE - Godar', 'lat1' => 27.693833, 'lng1' => 85.291078, 'lat2' => 27.692199, 'lng2' => 85.288783],
            ['name' => 'H2', 'title' => 'Godar - SKE', 'lat1' => 27.692199, 'lng1' => 85.288783, 'lat2' => 27.693833, 'lng2' => 85.291078],

            ['name' => 'H2', 'title' => 'SKE - Ravi Bhavan', 'lat1' => 27.693833, 'lng1' => 85.291078, 'lat2' => 27.695491, 'lng2' => 85.292459],
            ['name' => 'H2', 'title' => 'Ravi Bhavan - SKE', 'lat1' => 27.695491, 'lng1' => 85.292459, 'lat2' => 27.693833, 'lng2' => 85.291078],


        ];
        Edge::insert($edges);
    }
}
