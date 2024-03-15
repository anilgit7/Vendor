<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class PathUsingAPI
{
    public function findPath($startLat, $startLng, $endLat, $endLng)
    {
        // Use Google Directions API to find the path between start and end points
        $response = Http::get('https://maps.googleapis.com/maps/api/directions/json', [
            'origin' => $startLat . ',' . $startLng,
            'destination' => $endLat . ',' . $endLng,
            'mode' => 'driving', // Specify the travel mode as driving
            'key' => env('GOOGLE_MAP_KEY'),
        ]);

        $data = $response->json();

        // Extract the polyline-encoded path from the response
        $polyline = $data['routes'][0]['overview_polyline']['points'];
        
        // Decode the polyline to obtain detailed path coordinates
        $pathCoordinates = $this->decodePolyline($polyline);

        return $pathCoordinates;
    }

    private function decodePolyline($encoded)
    {
        $length = strlen($encoded);
        $index = 0;
        $points = [];

        $lat = 0;
        $lng = 0;

        while ($index < $length) {
            $b = 0;
            $shift = 0;
            $result = 0;
            do {
                $b = ord(substr($encoded, $index++)) - 63;
                $result |= ($b & 0x1f) << $shift;
                $shift += 5;
            } while ($b >= 0x20);
            $dlat = (($result & 1) ? ~($result >> 1) : ($result >> 1));
            $lat += $dlat;

            $shift = 0;
            $result = 0;
            do {
                $b = ord(substr($encoded, $index++)) - 63;
                $result |= ($b & 0x1f) << $shift;
                $shift += 5;
            } while ($b >= 0x20);
            $dlng = (($result & 1) ? ~($result >> 1) : ($result >> 1));
            $lng += $dlng;

            $points[] = ['lat' => $lat / 1e5, 'lng' => $lng / 1e5];
        }

        return $points;
    }
}
