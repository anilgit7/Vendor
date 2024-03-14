<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\RequestException;

class GoogleRoadsService
{
    public function getRoadNodes($startLat, $startLng, $endLat, $endLng)
    {
        try {
            // Make request to Google Roads API with start and end points
            $response = Http::get('https://roads.googleapis.com/v1/nearestRoads', [
                'points' => urlencode($startLat . ',' . $startLng) . '%7C' . urlencode($endLat . ',' . $endLng),
                'key' => env('GOOGLE_MAP_KEY'),
            ]);

            $data = $response->json();
            // Extract snapped points (road nodes)
            $roadNodes = [];
            foreach ($data as $snappedPoint) {
                $roadNodes[] = [
                    'lat' => $snappedPoint['location']['latitude'],
                    'lng' => $snappedPoint['location']['longitude']
                ];
            }

            return $roadNodes;
        } catch (RequestException $e) {
            // Handle HTTP request exception
            // Log or return an error message
            return [];
        }
    }
}
