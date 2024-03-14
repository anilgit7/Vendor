<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class AStarAlgorithm
{
    public function findPath($startLat, $startLng, $endLat, $endLng)
    {
        // Use Google Directions API to find the path between start and end points
        $response = Http::get('https://maps.googleapis.com/maps/api/directions/json', [
            'origin' => $startLat . ',' . $startLng,
            'destination' => $endLat . ',' . $endLng,
            'key' => env('GOOGLE_MAP_KEY'),
        ]);
        
        $data = $response->json();
        // Extract the coordinates from the response
        $pathCoordinates = [];
        foreach ($data['routes'][0]['legs'][0]['steps'] as $step) {
            $pathCoordinates[] = [
                'lat' => $step['start_location']['lat'],
                'lng' => $step['start_location']['lng']
            ];
        }

        // Add the end point
        $pathCoordinates[] = [
            'lat' => $endLat,
            'lng' => $endLng
        ];

        return $pathCoordinates;
    }
}
