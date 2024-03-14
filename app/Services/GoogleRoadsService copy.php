<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Client\RequestException;
class GoogleRoadsService
{
    public function getRoadNodes($startLat, $startLng, $endLat, $endLng)
    {
        try {
            // Calculate intermediate points along the path
            $intermediatePoints = $this->calculateIntermediatePoints($startLat, $startLng, $endLat, $endLng);

            // Make request to Google Roads API with intermediate points
            // $response = Http::get('https://roads.googleapis.com/v1/snapToRoads', [
            //     'path' => implode('|', $intermediatePoints),
            //     'interpolate' => false, // Interpolate additional points between snapped points
            //     'key' => env('GOOGLE_MAP_KEY'),
            // ]);

            $response = Http::get('https://roads.googleapis.com/v1/nearestRoads', [
                'points' => implode('%7C', $intermediatePoints),
                'key' => env('GOOGLE_MAP_KEY'),
            ]);

            $data = $response->json();
            // Extract snapped points (road nodes)
            $roadNodes = [];
            foreach ($data['snappedPoints'] as $snappedPoint) {
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
    private function calculateIntermediatePoints($startLat, $startLng, $endLat, $endLng)
    {
        // Example: Divide the path into 10 segments and add intermediate points
        $numSegments = 10;
        $intermediatePoints = [];

        for ($i = 0; $i <= $numSegments; $i++) {
            $segmentStartLat = $startLat + ($endLat - $startLat) * ($i / $numSegments);
            $segmentStartLng = $startLng + ($endLng - $startLng) * ($i / $numSegments);

            $intermediatePoints[] = $segmentStartLat . ',' . $segmentStartLng;
        }

        return $intermediatePoints;
    }
}