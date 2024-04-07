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
//checked
            ['name' => 'B1', 'title' => 'Koteshwor - Balkumari Pul', 'lat1' => 27.679001, 'lng1' => 85.349374, 'lat2' => 27.673604, 'lng2' => 85.342603],
            ['name' => 'B1', 'title' => 'Balkumari Pul - Koteshwor', 'lat1' => 27.673604, 'lng1' => 85.342603, 'lat2' => 27.679001, 'lng2' => 85.349374],
             
            ['name' => 'H1', 'title' => 'Balkumari Pul - Laligurans', 'lat1' => 27.673604, 'lng1' => 85.342603, 'lat2' => 27.668459, 'lng2' => 85.349430],
            ['name' => 'H1', 'title' => 'Laligurans - Balkumari Pul', 'lat1' => 27.668459, 'lng1' => 85.349430, 'lat2' => 27.673604, 'lng2' => 85.342603],

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

            ['name' => 'H2', 'title' => 'Chakupat - Kupandol', 'lat1' => 27.684871, 'lng1' => 85.318719, 'lat2' => 27.688287, 'lng2' => 85.315730],
            ['name' => 'H2', 'title' => 'Kupandol - Chakupat', 'lat1' => 27.688287, 'lng1' => 85.315730, 'lat2' => 27.684871, 'lng2' => 85.318719],

            ['name' => 'H2', 'title' => 'Chakupat - Pulchowk', 'lat1' => 27.684871, 'lng1' => 85.318719, 'lat2' => 27.676778, 'lng2' => 85.316473],
            ['name' => 'H2', 'title' => 'Pulchowk - Chakupat', 'lat1' => 27.676778, 'lng1' => 85.316473, 'lat2' => 27.684871, 'lng2' => 85.318719],
            
            ['name' => 'H2', 'title' => 'Kupandol - Tripuramarga', 'lat1' => 27.688287, 'lng1' => 85.315730, 'lat2' => 27.690779, 'lng2' => 85.317420],
            ['name' => 'H2', 'title' => 'Tripuramarga - Kupandol', 'lat1' => 27.690779, 'lng1' => 85.317420, 'lat2' => 27.688287, 'lng2' => 85.315730],

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

            ['name' => 'H2', 'title' => 'New Baneshwor - Tinkune', 'lat1' => 27.688041, 'lng1' => 85.335630, 'lat2' => 27.685710, 'lng2' => 85.346388],
            ['name' => 'H2', 'title' => 'Tinkune - New Baneshwor', 'lat1' => 27.685710, 'lng1' => 85.346388, 'lat2' => 27.688041, 'lng2' => 85.335630],

            ['name' => 'H2', 'title' => 'New Baneshwor - Sankhamul', 'lat1' => 27.688041, 'lng1' => 85.335630, 'lat2' => 27.681269, 'lng2' => 85.331963],
            ['name' => 'H2', 'title' => 'Sankhamul - New Baneshwor', 'lat1' => 27.681269, 'lng1' => 85.331963, 'lat2' => 27.688041, 'lng2' => 85.335630],

            ['name' => 'H2', 'title' => 'Sankhamul - Mangalbazar', 'lat1' => 27.681269, 'lng1' => 85.331963, 'lat2' => 27.679482, 'lng2' => 85.329354],
            ['name' => 'H2', 'title' => 'Mangalbazar - Sankhamul', 'lat1' => 27.679482, 'lng1' => 85.329354, 'lat2' => 27.681269, 'lng2' => 85.331963],

            ['name' => 'H2', 'title' => 'Mangalbazar - Patan DS', 'lat1' => 27.679482, 'lng1' => 85.329354, 'lat2' => 27.674703, 'lng2' => 85.325657],
            ['name' => 'H2', 'title' => 'Patan DS - Mangalbazar', 'lat1' => 27.674703, 'lng1' => 85.325657, 'lat2' => 27.679482, 'lng2' => 85.329354],
            
            ['name' => 'B1', 'title' => 'Koteshwor - Tinkune', 'lat1' => 27.679001, 'lng1' => 85.349374, 'lat2' => 27.685710, 'lng2' => 85.346388],
            ['name' => 'B1', 'title' => 'Tinkune - Koteshwor', 'lat1' => 27.685710, 'lng1' => 85.346388, 'lat2' => 27.679001, 'lng2' => 85.349374],
            
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

            ['name' => 'H2', 'title' => 'Pulchowk - Jawalakhel', 'lat1' => 27.676778, 'lng1' => 85.316473, 'lat2' => 27.672981, 'lng2' => 85.314096],
            ['name' => 'H2', 'title' => 'Jawalakhel - Pulchowk', 'lat1' => 27.672981, 'lng1' => 85.314096, 'lat2' => 27.676778, 'lng2' => 85.316473],

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
        
        ];
        Edge::insert($edges);
    }
}
