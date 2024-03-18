<?php

namespace App\Services;

class AStarAlgorithm
{
    public function findPath($startLat, $startLng, $endLat, $endLng, $roadNodes)
    {
        // Initialize open and closed lists
        $open = [];
        $closed = [];

        // Start node
        $startNode = [
            'lat' => $startLat,
            'lng' => $startLng,
            'g' => 0,
            'h' => $this->calculateHeuristic($startLat, $startLng, $endLat, $endLng),
            'parent' => null
        ];
        // Add start node to open list
        $open[] = $startNode;
        $closed[] = $startNode; // Add start node to closed list
        while (!empty($open)) {
            // Get the node with the lowest f value from the open list
            $current = $this->getLowestCostNode($open);
            // Move current node from open list to closed list
            $key = array_search($current, $open);
            array_splice($open, $key, 1);
            $closed[] = $current;
            // If reached the end node, reconstruct and return the path
            if ($this->isSameNode($current, $endLat, $endLng)) {
                // return $current;
                return $this->reconstructPath($current);
            }
        
            // Expand current node's neighbors
            $neighbors = $this->getNeighbors($current, $roadNodes);
            // return $neighbors;
            // return $closed;
            foreach ($neighbors as &$neighbor) { // Use reference to update neighbor values
                // If neighbor is in the closed list, skip
                if ($this->isNodeInList($neighbor, $closed)) {
                    continue;
                }
                // Calculate tentative g value
                $tentativeG = $current['g'] + $this->calculateDistance($current['lat'], $current['lng'], $neighbor['lat'], $neighbor['lng']);
                
                // If neighbor is not in the open list or tentative g is lower
                if (!$this->isNodeInList($neighbor, $open) || $tentativeG < $neighbor['g']) {
                    // Set parent and g value
                    $neighbor['parent'] = $current;
                    $neighbor['g'] = $tentativeG;
                    // Calculate and set heuristic (h) value
                    $neighbor['h'] = $this->calculateHeuristic($neighbor['lat'], $neighbor['lng'], $endLat, $endLng);
                    
                    // Calculate f value
                    $neighbor['f'] = $neighbor['g'] + $neighbor['h'];
                    
                    // If neighbor is not in the open list, add it
                    if (!$this->isNodeInList($neighbor, $open)) {
                        $open[] = $neighbor;
                    }
                }
            }
        }
        
        // If no path found, return empty array or handle accordingly
        return [];
        
    }

    private function calculateHeuristic($lat1, $lng1, $lat2, $lng2)
    {
        // For simplicity, let's use Euclidean distance
        return sqrt(pow($lat2 - $lat1, 2) + pow($lng2 - $lng1, 2));
    }

    private function calculateDistance($lat1, $lng1, $lat2, $lng2)
    {
        // For simplicity, let's use Euclidean distance as well
        return $this->calculateHeuristic($lat1, $lng1, $lat2, $lng2);
    }

    private function getNeighbors($node, $roadNodes)
    {
        // Initialize an empty array to store neighbors
        $neighbors = [];

        // Calculate g value for the neighbors and construct neighbor data
        foreach ($roadNodes as $neighbor) {
            // Calculate the g value, which represents the cost from the start node to the current neighbor
            $gValue = $node['g'] + $this->calculateDistance($node['lat'], $node['lng'], $neighbor['lat'], $neighbor['lng']);
            
            // Construct neighbor data with latitude, longitude, g value, and parent node
            $neighborData = [
                'lat' => $neighbor['lat'],     // Latitude of the neighbor
                'lng' => $neighbor['lng'],     // Longitude of the neighbor
                'g' => $gValue,                // Cost (g value) from the start node to the neighbor
                'parent' => $node              // Reference to the parent node
            ];

            // Add neighbor data to the neighbors array
            $neighbors[] = $neighborData;
        }

        // Return the array containing all calculated neighbors
        return $neighbors;
    }


    private function isSameNode($node, $lat, $lng)
    {
        return $node['lat'] == $lat && $node['lng'] == $lng;
    }

    private function isNodeInList($node, $list)
    {
        foreach ($list as $item) {
            if ($this->isSameNode($item, $node['lat'], $node['lng'])) {
                return true;
            }
        }
        return false;
    }

    private function getLowestCostNode($list)
    {
        $lowest = null; // Initialize with null
        foreach ($list as $item) {
            if ($lowest === null || $item['g'] + $item['h'] < $lowest['g'] + $lowest['h']) {
                $lowest = $item;
            }
        }
        return $lowest;
    }

    private function reconstructPath($node)
    {
        $path = [];
        while ($node != null) {
            $path[] = ['lat' => $node['lat'], 'lng' => $node['lng']];
            $node = $node['parent'];
        }
        return array_reverse($path);
    }

}