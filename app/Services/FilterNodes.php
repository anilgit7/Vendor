<?php

namespace App\Services;

class FilterNodes {
    private $minLat;
    private $maxLat;
    private $minLon;
    private $maxLon;

    public function getFilterNodes($lat1, $lon1, $lat2, $lon2, $nodes) {
        // Determine the bounding box based on the provided coordinates
        $this->minLat = min($lat1, $lat2);
        $this->maxLat = max($lat1, $lat2);
        $this->minLon = min($lon1, $lon2);
        $this->maxLon = max($lon1, $lon2);

        // Filter nodes based on the bounding box
        $filteredNodes = [];

        foreach ($nodes as $node) {
            if ($node['latitude'] >= $this->minLat && $node['latitude'] <= $this->maxLat &&
                $node['longitude'] >= $this->minLon && $node['longitude'] <= $this->maxLon) {
                // $filteredNodes[] = $node;
                $filteredNodes[] = [
                    'lat' => $node['latitude'],
                    'lng' => $node['longitude']
                ];
            }
        }
        $filteredNodes[] = [
            'lat' => $lat2,
            'lng' => $lon2
        ];

        return $filteredNodes;
    }
}